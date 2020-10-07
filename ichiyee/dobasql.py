import pymongo
from pymongo import MongoClient
import pymysql
from pypinyin import pinyin, lazy_pinyin
import pypinyin
from opencc import OpenCC



# 接著我們獲取 cursor 來操作我們的 avIdol 這個數據庫
cursor = mydb.cursor()

conn = MongoClient('mongodb://localhost:27017/')#27017是你MongoDB的默認port
db = conn.test#創建一個 Idol 數據庫，如果 mongodb 沒有會自行創建
mycol = db["video"]

cc = OpenCC('s2t')
con=0
actorlist=[]
directorlist=[]
vtypelist=[]
comment=[]

for item in mycol.find({},{"_id": 0,'actor':1,'director':1,'type':1,'area':1,'video_name':1,'score':1,'time':1,'plot':1,'comment':1,'image':1,'link':1}):
    actorlist.clear()
    directorlist.clear()
    vtypelist.clear()
    comment.clear()
    video_name=''
    year=''
    plot=""
    area=0
    vfrom=0
    video=0
    video_name_ch=""
    video_name_eg=""
    video_score=0.0
    image=''
    
    for i,v in item.items():
#------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        if i=='actor':
            s="".join(v) 
            d=s.replace('/','').split("  ")
            for a in d:
                egList = []
                for q in pinyin(a, 0):
                    for j in q:
                        egList.append(j.title())
                eg = ' '.join( egList )
                a=cc.convert(a.lstrip())
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
#-------------------------------------------------------------------------------------------------------------------------------------------------
        elif i=='type':
            for a in v:
                c=cc.convert(a.lstrip())
                sql = "SELECT  *  FROM  testdb1.vtype where  vtype_name = '{}' ;".format(c)
                try:
                    cursor.execute(sql)
                    mydb.commit()
                    row = cursor.fetchone()
                    if row is not None:
                        print("已有這筆資料")
                    else:
                        cursor.execute("insert into testdb1.vtype(vtype_name) values ('{}')".format(c))
                        mydb.commit()
                        print('成功新增資料')

                    cursor.execute("SELECT vtype_id FROM testdb1.vtype WHERE vtype_name='{}';".format(c))
                    mydb.commit()
                    for o in cursor:
                        vtypelist.append(o[0])
                except:
                    # 回滾
                    print("失敗")
                    mydb.rollback()
                print(c)
#----------------------------------------------------------------------------------------------------------------------
        elif i=='director':
            for a in v:
                egList = []
                for d in pinyin(a, 0):
                    for j in d:
                        egList.append( j.title() )
                
                eg = ' '.join( egList )
                # 插入一條記錄
                a=cc.convert(a.lstrip())
                sql = "SELECT  *  FROM  testdb1.director where  director_name = '{}' ;".format(a)
                try:
                    cursor.execute(sql)
                    mydb.commit()
                    row = cursor.fetchone()   
                    if row is not None:
                        print("已有這筆資料")
                    else:
                        cursor.execute("insert into testdb1.director(director_name,director_name_eg) values ('{}','{}')".format(a,eg))
                        mydb.commit()
                        print('成功新增資料')

                    cursor.execute("SELECT director_id FROM testdb1.director WHERE director_name='{}';".format(a))
                    mydb.commit()
                    for o in cursor:
                        directorlist.append(o[0])
                        
                except:
                    # 回滾
                    print("失敗")
                    mydb.rollback()        
                print(a)
#--------------------------------------------------------------------------------------------------------------------------------------------
        elif i=='area':
            s="".join(v) 
            d=s.replace('/','').split("  ")
            for a in d:
                c=cc.convert(a.lstrip())
                if c=='中國大陸':
                    c='大陸地區'
                elif c=='中國香港':
                    c='香港'
                elif c=='中國台灣':
                    c='臺灣地區'
                elif c=='中國臺灣':
                    c='臺灣地區'
                sql = "SELECT  *  FROM  testdb1.area where  area_name = '{}' ;".format(c)
                try:
                    cursor.execute(sql)
                    mydb.commit()
                    row = cursor.fetchone()   
                    if row is not None:
                        print("已有這筆資料")
                    else:
                        cursor.execute("insert into testdb1.area(area_name) values ('{}')".format(c))
                        mydb.commit()
                        print('成功新增資料')
        
                    cursor.execute("SELECT area_id FROM testdb1.area WHERE area_name='{}';".format(c))
                    mydb.commit()
                    for o in cursor:
                        area=o[0]
                except:
                    # 回滾
                    print("失敗")
                    mydb.rollback()
                print(c)
#-------------------------------------------------------------------------------------------------------------------------
        elif i=='video_name':
            for a in v:
                # 插入一條記錄
                s=s1=a.split(' ', 1 )
                video_name_ch=s[0]

                a=cc.convert(a.lstrip())
                s1=a.split(' ', 1)
                video_name=s1[0]
                try:
                    video_name_eg=s1[1]
                except:
                    video_name_eg=""
                print(s1[0])
#-----------------------------------------------------------------------------------------------------------------------------
        elif i=='plot':
            for a in v:
                a=a.replace('<br />','')
                a=a.replace("                                　　","")
                a=a.replace("\n","")
                a=a.replace("                                    ","")
                a=cc.convert(a.lstrip())
                plot=a
                print(a)
#----------------------------------------------------------------------------------------------------------------------------        
        elif i=='score':
            for a in v:
                video_score=a
                print(a)
#----------------------------------------------------------------------------------------------------------------------------
        elif i=='time':
            year=v[0:10]
            print(year)

        elif i=='comment':
            for a in range(5):
                comment.append(v[a])

        elif i=='image':
            image=v

        elif i=='link':
            cursor.execute("SELECT * FROM  testdb1.video_from where (vfrom) = ('豆瓣');")
            mydb.commit()
            row = cursor.fetchone()   
            if row is not None:
                print("已有這筆資料")
            else:
                cursor.execute("insert into testdb1.video_from(vfrom) values ('豆瓣');")
                mydb.commit()
                print('成功新增資料')

            cursor.execute("SELECT vfrom_id FROM testdb1.video_from WHERE vfrom='豆瓣';")
            mydb.commit()
            for o in cursor:
                vfrom=o[0]

            sql = "SELECT  *  FROM  testdb1.video where  (video_name,video_eg_name,video_ch_name,area_id,year,introduction,vfrom_id) = ('{}','{}','{}',{},{},'{}',{}) ;".format(video_name,video_name_eg,video_name_ch,area,year,plot,vfrom)
            try:
                cursor.execute(sql)
                mydb.commit()
                row = cursor.fetchone()   
                if row is None:
                    cursor.execute("insert into testdb1.video(video_name,video_eg_name,video_ch_name,area_id,year,introduction,vlink,vfrom_id,picture) values ('{}','{}','{}',{},{},'{}','{}',{},'{}')".format(video_name,video_name_eg,video_name_ch,area,year,plot,v,vfrom,image))
                    mydb.commit()
                    print('成功新增資料') 
                else:
                    cursor.execute("update testdb1.video set vlink= '{}' where  video_name = '{}' and vfrom_id = {};".format(v,video_name,vfrom))
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
    
    for a4 in comment:
        a4=a4.replace('"',"")
        a4=a4.replace('\'','’')
        cursor.execute("SELECT  *  FROM  testdb1.video_comment where (video_comment) = ('{}');".format(a4))
        mydb.commit()
        row = cursor.fetchone()   
        if row is not None:
            print("已有這筆資料")
        else:
            cursor.execute("insert into testdb1.video_comment(video_id,vfrom_id,video_comment) values ({},{},'{}')".format(video,vfrom,a4))
            mydb.commit()
            print('成功新增資料')

    try:
        cursor.execute("SELECT  *  FROM  testdb1.score where (video_id,vfrom_id) = ({},{}) ;".format(video,vfrom))
        mydb.commit()
        row = cursor.fetchone()   
        if row is None:
            cursor.execute("insert into testdb1.score(video_id,vfrom_id,score) values ({},{},{})".format(video,vfrom,video_score))
            mydb.commit()
            print('成功新增資料') 
        else:
            cursor.execute("update testdb1.score set score= {} where video_id='{}' and vfrom_id = {};".format(video_score,video,vfrom))
            mydb.commit()
            print("修改資料")
    except:
        print("失敗")
        mydb.rollback()
    
    con+=1

    print(con)
    print("")

mydb.close()        
x = mycol.delete_many({})
if x.deleted_count==0:
    print("還沒匯入資料")
else:
    print(x.deleted_count, "已删除")