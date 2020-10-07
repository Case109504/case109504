import pymongo
from pymongo import MongoClient
import pymysql
from pypinyin import pinyin, lazy_pinyin
import pypinyin
# 使用 connect 方法，傳入數據庫地址，賬號密碼，數據庫名就可以得到你的數據庫對象
#mydb = pymysql.connect("127.0.0.1", "root", "1234", "testdb1")

# 接著我們獲取 cursor 來操作我們的 avIdol 這個數據庫
cursor = mydb.cursor()

conn = MongoClient('mongodb://localhost:27017/')#27017是你MongoDB的默認port
db = conn.test   #創建一個 Idol 數據庫，如果 mongodb 沒有會自行創建
mycol = db["ichiyee"]


actorlist=[]
directorlist=[]
vtypelist=[]

#用For查詢
for item in mycol.find({},{"_id": 0,"video_name": 1,'director':1,'actors':1,'type':1,'area':1,'time':1,'introduction':1,'image':1,'link':1}):
    actorlist.clear()
    directorlist.clear()
    vtypelist.clear()
    video_name=''
    area=0
    year=''
    introduction=''
    ich='https://tw.iqiyi.com/'
    vfrom=''
    image=''
    video=0
    for i,v in item.items():
        if i=='actors':
            for a in v:
                # 插入一條記錄
                egList = []
                for d in pinyin(a, 0):
                    for j in d:
                        egList.append( j.title())
                
                eg = ' '.join( egList )
                sql = "SELECT  *  FROM  testdb1.actor where  actor_name = '{}' ;".format(a)
                try:
                    cursor.execute(sql)
                    mydb.commit()
                    row = cursor.fetchone()
                    if row is not None:
                        print("已有這筆資料")
                    else:
                        cursor.execute("insert into testdb1.actor(actor_name,actor_name_eg) values ('{}','{}')".format(a,eg))
                        mydb.commit()
                        print('成功新增資料')

                    cursor.execute("SELECT actor_id FROM testdb1.actor WHERE actor_name='{}';".format(a))
                    mydb.commit()
                    for o in cursor:
                        actorlist.append(o[0])

                except:
                    # 回滾
                    print("失敗")
                    mydb.rollback()
                print(a)
#-------------------------------------------------------------------------------------------------------------------------------
        elif i=='type':
            for a in v:
                sql = "SELECT  *  FROM  testdb1.vtype where  vtype_name = '{}' ;".format(a)
                try:
                    cursor.execute(sql)
                    mydb.commit()
                    row = cursor.fetchone()
                    if row is not None:
                        print("已有這筆資料")
                    else:
                        cursor.execute("insert into testdb1.vtype(vtype_name) values ('{}')".format(a))
                        mydb.commit()
                        print('成功新增資料')

                    cursor.execute("SELECT vtype_id FROM testdb1.vtype WHERE vtype_name='{}';".format(a))
                    mydb.commit()
                    for o in cursor:
                        vtypelist.append(o[0])

                except:
                    # 回滾
                    print("失敗")
                    mydb.rollback()
                print(a)
#-------------------------------------------------------------------------------------------------------------------------------
        elif i=='video_name':
            # 插入一條記錄
            video_name=v
            print(v)
#-------------------------------------------------------------------------------------------------------------------------------
        elif i=='time':
            year=v
#-------------------------------------------------------------------------------------------------------------------------------
        elif i=='director':

            egList = []
            for d in pinyin(v, 0):
                for j in d:
                    egList.append( j.title() )
            
            eg = ' '.join( egList )
            # 插入一條記錄
            sql = "SELECT  *  FROM  testdb1.director where  director_name = '{}' ;".format(v)
            try:
                cursor.execute(sql)
                mydb.commit()
                row = cursor.fetchone()   
                if row is not None:
                    print("已有這筆資料")
                else:
                    cursor.execute("insert into testdb1.director(director_name,director_name_eg) values ('{}','{}')".format(v,eg))
                    mydb.commit()
                    print('成功新增資料')

                cursor.execute("SELECT director_id FROM testdb1.director WHERE director_name='{}';".format(v))
                mydb.commit()
                for o in cursor:
                    directorlist.append(o[0])
            except:
                # 回滾
                print("失敗")
                mydb.rollback()        
            print(v)
#-------------------------------------------------------------------------------------------------------------------------------
        elif i=='area':
            sql = "SELECT  *  FROM  testdb1.area where  area_name = '{}' ;".format(v)
            try:
                cursor.execute(sql)
                mydb.commit()
                row = cursor.fetchone()   
                if row is not None:
                    print("已有這筆資料")
                else:
                    cursor.execute("insert into testdb1.area(area_name) values ('{}')".format(v))
                    mydb.commit()
                    print('成功新增資料')

                cursor.execute("SELECT area_id FROM testdb1.area WHERE area_name='{}';".format(v))
                mydb.commit()
                for o in cursor:
                    area=o[0]
            except:
                # 回滾
                print("失敗")
                mydb.rollback()
            print(v)
#-------------------------------------------------------------------------------------------------------------------------------
        elif i=='introduction':
            introduction=v
        elif i=='image':
            image=v
#-------------------------------------------------------------------------------------------------------------------------------
        else:
            if v[0:21]==ich:
                cursor.execute("SELECT * FROM  testdb1.video_from where (vfrom) = ('愛奇藝');")
                mydb.commit()
                row = cursor.fetchone()   
                if row is not None:
                    print("已有這筆資料")
                else:
                    cursor.execute("insert into testdb1.video_from(vfrom) values ('愛奇藝');")
                    mydb.commit()
                    print('成功新增資料')
                cursor.execute("SELECT vfrom_id FROM testdb1.video_from WHERE vfrom='愛奇藝';")
                mydb.commit()
                for o in cursor:
                    vfrom=o[0]

            sql = "SELECT  *  FROM  testdb1.video where  (video_name,area_id,year,introduction,vfrom_id) = ('{}',{},'{}','{}',{}) ;".format(video_name,area,year,introduction,vfrom)
            try:
                cursor.execute(sql)
                mydb.commit()
                row = cursor.fetchone()   
                if row is None:
                    cursor.execute("insert into testdb1.video(video_name,area_id,year,introduction,vlink,vfrom_id,picture) values ('{}',{},'{}','{}','{}',{},'{}')".format(video_name,area,year,introduction,v,vfrom,image))
                    mydb.commit()
                    print('成功新增資料') 
                else:
                    cursor.execute("update testdb1.video set vlink= '{}' where video_name='{}' and vfrom_id={};".format(v,video_name,vfrom))
                    mydb.commit()
                    cursor.execute("update testdb1.video set picture= '{}' where  video_name = '{}' and vfrom_id = {};".format(image,video_name,vfrom))
                    mydb.commit()
                    print("修改資料")

                cursor.execute("SELECT video_id FROM testdb1.video WHERE video_name='{}';".format(video_name))
                mydb.commit()
                for o in cursor:
                    video=o[0]
            except:
                # 回滾
                print("失敗")
                mydb.rollback()
            print(v)
            
#-------------------------------------------------------------------------------------------------------------------------------
    for a1 in actorlist:
        cursor.execute("SELECT  *  FROM  testdb1.actor_record where (actor_id,video_id) = ({}, {});".format(a1,video))
        mydb.commit()
        row = cursor.fetchone()   
        if row is not None:
            print("已有這筆資料")
        else:
            cursor.execute( "insert into testdb1.actor_record(actor_id,video_id) values ({}, {})".format(a1,video))
            mydb.commit()
            print('成功新增資料')
    
    for a2 in directorlist:
        cursor.execute("SELECT  *  FROM  testdb1.director_record where (director_id,video_id) = ({}, {});".format(a2,video))
        mydb.commit()
        row = cursor.fetchone()   
        if row is not None:
            print("已有這筆資料")
        else:
            cursor.execute( "insert into testdb1.director_record(director_id,video_id) values ({}, {})".format(a2,video))
            mydb.commit()
            
    for a3 in vtypelist:
        cursor.execute("SELECT  *  FROM  testdb1.vtype_record where (vtype_id,video_id) = ({}, {});".format(a3,video))
        mydb.commit()
        row = cursor.fetchone()   
        if row is not None:
            print("已有這筆資料")
        else:
            cursor.execute( "insert into testdb1.vtype_record(vtype_id,video_id) values ({}, {})".format(a3,video))
            mydb.commit()

    try:
        cursor.execute("SELECT  *  FROM  testdb1.score where (video_id,vfrom_id) = ({},{}) ;".format(video,vfrom))
        mydb.commit()
        row = cursor.fetchone()   
        if row is None:
            cursor.execute("insert into testdb1.score(video_id,vfrom_id,score) values ({},{},{})".format(video,vfrom,0))
            mydb.commit()
            print('成功新增資料') 
        else:
            cursor.execute("update testdb1.score set score= {} where video_id='{}' and vfrom_id = {};".format(0,video,vfrom))
            mydb.commit()
            print("修改資料")
    except:
        print("失敗")
        mydb.rollback()
    print("")

mydb.close() 

x = mycol.delete_many({})
if x.deleted_count==0:
    print("還沒匯入資料")
else:
    print(x.deleted_count, "已删除")     
# 最後我們關閉這個數據庫的連接

        
    