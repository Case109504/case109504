import pymongo
from pymongo import MongoClient
import pymysql
# 使用 connect 方法，傳入數據庫地址，賬號密碼，數據庫名就可以得到你的數據庫對象
mydb = pymysql.connect("127.0.0.1", "root", "jason580219", "new_schema")
# 接著我們獲取 cursor 來操作我們的 avIdol 這個數據庫
cursor = mydb.cursor()

conn = MongoClient('mongodb://localhost:27017/')#27017是你MongoDB的默認port
db = conn.test   #創建一個 Idol 數據庫，如果 mongodb 沒有會自行創建
mycol = db["video"]



#用For查詢
for item in mycol.find({},{"_id": 0,"video_name": 1,'actors':1}):
    for i,v in item.items():
        if i=='actors':
            for a in v:
                # 插入一條記錄
                sql = "SELECT  *  FROM  new_schema.actor where  actor_name = '{}' ;".format(a)
                print(sql)
            try:
                    print( 'sql execute start' )
                    cursor.execute(sql)
                    print( 'sql execute end' )    
                    mydb.commit()
                    print( 'mydb commit end' )
                    row = cursor.fetchone()
                    print( 'get row' )
                    if row is not None:
                        print("已有這筆資料")
                    else:
                        cursor.execute("insert into new_schema.actor (actor_name) values ('{}')".format(a))
                        mydb.commit()
                        print('成功新增資料')
            except:
                # 回滾
                print("失敗")
                mydb.rollback()
            print(a)
#-------------------------------------------------------------------------------------------------------------------------------

        elif i=='video_name':
            # 插入一條記錄
            sql = "SELECT  *  FROM  new_schema.video where  video_name = '{}' ;".format(v[0])
            print(sql)
            try:
                print( 'sql execute start' )
                cursor.execute(sql)
                print( 'sql execute end' )    
                mydb.commit()
                print( 'mydb commit end' )
                row = cursor.fetchone()
                print( 'get row' )
                if row is not None:
                    print("已有這筆資料")
                else:
                    print( "insert into new_schema.video (video_name) values ('{}')".format(v[0]) )
                    cursor.execute("insert into new_schema.video (video_name) values ('{}')".format(v[0]))
                    mydb.commit()
                    print('成功新增資料')
            except:
                # 回滾
                print("失敗")
                mydb.rollback()
            print(v)


        
mydb.close()        
# 最後我們關閉這個數據庫的連接
