import pymongo
from pymongo import MongoClient
import pymysql
# 使用 connect 方法，傳入數據庫地址，賬號密碼，數據庫名就可以得到你的數據庫對象
mydb = pymysql.connect("127.0.0.1", "root", "1234", "test2")
# 接著我們獲取 cursor 來操作我們的 avIdol 這個數據庫
cursor = mydb.cursor()

conn = MongoClient('mongodb://localhost:27017/')#27017是你MongoDB的默認port
db = conn.test   #創建一個 Idol 數據庫，如果 mongodb 沒有會自行創建
mycol = db["ichiyee"]

video=0
actorlist=[]
directorlist=[]
vtypelist=[]
video_name=''
area=0
year=0
introduction=''
ich='https://tw.iqiyi.com/'

#用For查詢
for item in mycol.find({},{"_id": 0,"video_name": 1,'director':1,'actors':1,'type':1,'area':1,'time':1,'introduction':1,'link':1}):
    actorlist.clear()
    directorlist.clear()
    for i,v in item.items():
        if i=='actors':
            for a in v:
                # 插入一條記錄
                sql = "SELECT  *  FROM  test2.actor where  actor_name = '{}' ;".format(a)
                try:
                    cursor.execute(sql)
                    mydb.commit()
                    row = cursor.fetchone()
                    if row is not None:
                        print("已有這筆資料")
                    else:
                        cursor.execute("insert into test2.actor(actor_name) values ('{}')".format(a))
                        mydb.commit()
                        print('成功新增資料')

                    cursor.execute("SELECT actor_id FROM test2.actor WHERE actor_name='{}';".format(a))
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
                sql = "SELECT  *  FROM  test2.vtype where  vtype_name = '{}' ;".format(a)
                try:
                    cursor.execute(sql)
                    mydb.commit()
                    row = cursor.fetchone()
                    if row is not None:
                        print("已有這筆資料")
                    else:
                        cursor.execute("insert into test2.vtype(vtype_name) values ('{}')".format(a))
                        mydb.commit()
                        print('成功新增資料')

                    cursor.execute("SELECT vtype_id FROM test2.vtype WHERE vtype_name='{}';".format(a))
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
            # 插入一條記錄
            sql = "SELECT  *  FROM  test2.director where  director_name = '{}' ;".format(v)
            try:
                cursor.execute(sql)
                mydb.commit()
                row = cursor.fetchone()   
                if row is not None:
                    print("已有這筆資料")
                else:
                    cursor.execute("insert into test2.director(director_name) values ('{}')".format(v))
                    mydb.commit()
                    print('成功新增資料')

                cursor.execute("SELECT director_id FROM test2.director WHERE director_name='{}';".format(v))
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
            sql = "SELECT  *  FROM  test2.area where  area_name = '{}' ;".format(v)
            try:
                cursor.execute(sql)
                mydb.commit()
                row = cursor.fetchone()   
                if row is not None:
                    print("已有這筆資料")
                else:
                    cursor.execute("insert into test2.area(area_name) values ('{}')".format(v))
                    mydb.commit()
                    print('成功新增資料')

                cursor.execute("SELECT area_id FROM test2.area WHERE area_name='{}';".format(v))
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
#-------------------------------------------------------------------------------------------------------------------------------
        else:
            sql = "SELECT  *  FROM  test2.video where  (video_name,area_id,year,introduction,vlink) = ('{}',{},{},'{}','{}') ;".format(video_name,area,year,introduction,v)
            try:
                cursor.execute(sql)
                mydb.commit()
                row = cursor.fetchone()   
                if row is not None:
                    print("已有這筆資料")
                else:
                    cursor.execute("insert into test2.video(video_name,area_id,year,introduction,vlink) values ('{}',{},{},'{}','{}')".format(video_name,area,year,introduction,v))
                    mydb.commit()
                    print('成功新增資料')
                cursor.execute("SELECT video_id FROM test2.video WHERE video_name='{}';".format(video_name))
                mydb.commit()
                for o in cursor:
                    video=o[0]
            except:
                # 回滾
                print("失敗")
                mydb.rollback()
            
            if v[0:21]==ich:
                print('o')
                
            print(v)
            
#-------------------------------------------------------------------------------------------------------------------------------
    for a1 in actorlist:
        cursor.execute("SELECT  *  FROM  test2.actor_record where (actor_id,video_id) = ({}, {});".format(a1,video))
        mydb.commit()
        row = cursor.fetchone()   
        if row is not None:
            print("已有這筆資料")
        else:
            cursor.execute( "insert into test2.actor_record(actor_id,video_id) values ({}, {})".format(a1,video))
            mydb.commit()
            print('成功新增資料')
    
    for a2 in directorlist:
        cursor.execute("SELECT  *  FROM  test2.director_record where (director_id,video_id) = ({}, {});".format(a2,video))
        mydb.commit()
        row = cursor.fetchone()   
        if row is not None:
            print("已有這筆資料")
        else:
            cursor.execute( "insert into test2.director_record(director_id,video_id) values ({}, {})".format(a2,video))
            mydb.commit()
            
    for a3 in vtypelist:
        cursor.execute("SELECT  *  FROM  test2.vtype_record where (vtype_id,video_id) = ({}, {});".format(a3,video))
        mydb.commit()
        row = cursor.fetchone()   
        if row is not None:
            print("已有這筆資料")
        else:
            cursor.execute( "insert into test2.vtype_record(vtype_id,video_id) values ({}, {})".format(a3,video))
            mydb.commit()

    print("")
mydb.close()      
# 最後我們關閉這個數據庫的連接

        
    