import numpy as np
import pymysql
import matplotlib.pyplot as plt
import os
import calendar
import datetime
from DictTransform import *


# from datetime import datetime, timedelta
# 使用 connect 方法，傳入數據庫地址，賬號密碼，數據庫名就可以得到你的數據庫對象

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


cursor.execute("SELECT member_search_record.account,member_search_record.search_time,member_search_record.video_id,video.video_name,vtype.vtype_name FROM testdb1.member_search_record  left join video on video.video_id=member_search_record.video_id  left join vtype_record on vtype_record.video_id=video.video_id  left join vtype on vtype.vtype_id=vtype_record.vtype_id")
searchlist = cursor.fetchall()
allList=[]
usersearchtypelist=[]
for x in searchlist:
    allList += [x]
    usersearchtypelist+=[x[4]]
print(allList)
print(usersearchtypelist)

cursor.execute("SELECT vtype_name FROM testdb1.vtype")
untypeList = cursor.fetchall()
typeList=[]
for x in untypeList:
    typeList += (x)
typeList = list( set( typeList ) )
# print(typeList)


# print(listToDict(allList,key=0,value=[4]))


finaldict={}
for k, v in listToDict(allList,key=0,value=[4]).items():
    finalkey=k
    typeDict = { k:0 for k in typeList }
    for x in v:
      typeDict[x] += 1
    sort_type=sorted(typeDict.items(),key=lambda x:x[1],reverse=True)
    for i in sort_type:
      # print(k,i[0],i[1]) 
      finaldict[finalkey]=sort_type[:3]
print(finaldict)

# ------------------------------------------------------------------------------------

for k, v in finaldict.items(): 

  # 插入一條記錄
    sql = "SELECT  *  FROM  testdb1.type_sort where  account = '{}' ;".format(k)
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
          for x in v:
            print( "insert into testdb1.type_sort account,vtype,sort values (%s, %s,%s")
            val = (k,x[0],x[1])
            print(val)
            if val[2] == 0:
                print('False')
            else:
                cursor.execute("insert into testdb1.type_sort (account,vtype_name,sort) values (%s, %s,%s)",val)
                mydb.commit()
                print('成功新增資料')
    except Exception as e:
      print(e)

    mydb.rollback()       
      

       
mydb.close()   