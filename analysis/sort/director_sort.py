import numpy as np
import pymysql
import matplotlib.pyplot as plt
import os
import calendar
import datetime
from DictTransform import *


# from datetime import datetime, timedelta
# 使用 connect 方法，傳入數據庫地址，賬號密碼，數據庫名就可以得到你的數據庫對象
mydb = pymysql.connect("140.131.115.87", "root", "109504109504", "testdb1")
# 接著我們獲取 cursor 來操作我們的 avIdol 這個數據庫
cursor = mydb.cursor()


cursor.execute("SELECT account FROM testdb1.member_search_record")
clicklist = cursor.fetchall()
userList=[]
for x in clicklist: 
  userList.append(x[0])
  
# print (userList)

userfinish={}

for x in userList:
 userfinishkey = x

 if userfinishkey not in userfinish:
  userfinish[userfinishkey] = [x]
 

# print(userfinish)


cursor.execute("SELECT member_search_record.account,member_search_record.video_id,video.video_name,director.director_name FROM testdb1.member_search_record  left join video on video.video_id=member_search_record.video_id  left join vtype_record on vtype_record.video_id=video.video_id  left join  director_record on director_record.video_id=video.video_id  left join  director on director_record.director_id=director.director_id")
searchlist = cursor.fetchall()
allList=[]
usersearchdirlist=[]
for x in searchlist:
    allList += [x]
    usersearchdirlist+=[x[3]]
print(allList)
print(usersearchdirlist)

cursor.execute("SELECT director_name FROM testdb1.director")
undirList = cursor.fetchall()
dirList=[]
for x in undirList:
    dirList += (x)
dirList = list( set( dirList ) )
# print(dirList)


# print(listToDict(allList,key=0,value=[4]))


finaldict={}
for k, v in listToDict(allList,key=0,value=[3]).items():
    finalkey=k
    dirDict = { k:0 for k in dirList }
    for x in v:
      dirDict[x] += 1
    sort_dir=sorted(dirDict.items(),key=lambda x:x[1],reverse=True)
    for i in sort_dir:
      # print(k,i[0],i[1]) 
      finaldict[finalkey]=sort_dir[:3]
print(finaldict)


# ------------------------------------------------------------------------------------
for k, v in finaldict.items():  

  # 插入一條記錄
    sql = "SELECT  *  FROM  testdb1.director_sort where  account = '{}' ;".format(k)
    try:
        print( 'sql execute start' )
        cursor.execute(sql)
        print( 'sql execute end' )    
        mydb.commit()
        print( 'mydb commit end' )
        row = cursor.fetchone()
        print( 'get row' )  
        if row is not None:
            print( "DELETE FROM testdb1.director_sort WHERE account=%s")
            val = (k)
            cursor.execute("DELETE FROM testdb1.director_sort WHERE account=%s",val)
            mydb.commit()
            print('')
    except Exception as e:
      print(e)

      mydb.rollback()       


# ------------------------------------------------------------------------------------
for k, v in finaldict.items():  

  # 插入一條記錄
    sql = "SELECT  *  FROM  testdb1.director_sort where  account = '{}' ;".format(k)
    try:
        print( 'sql execute start' )
        cursor.execute(sql)
        print( 'sql execute end' )    
        mydb.commit()
        print( 'mydb commit end' )
        row = cursor.fetchone()
        print( 'get row' )  

        for x in v:
          print( "insert into testdb1.director_sort (account,director_name,sort) values (%s, %s,%s")
          val = (k,x[0],x[1])
          cursor.execute("insert into testdb1.director_sort (account,director_name,sort) values (%s, %s,%s)",val)
          mydb.commit()
          print('成功新增資料')
    except Exception as e:
      print(e)

      mydb.rollback()     
        
      

       
mydb.close()   