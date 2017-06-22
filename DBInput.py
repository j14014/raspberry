#!/usr/bin/env python
# -*- coding:utf-8 -*-
import MySQLdb
import json

if __name__ == "__main__":
    connector = MySQLdb.connect(host="localhost",db="j14014",user="j14014",passwd="j14014",charset="utf8")
    cursor = connector.cursor()

    f = open('output.json')
    data = json.load(f)

    cnt = 1

    for val in range(1,len(data)+1):
        value = data[str(cnt)]
        sql = "insert into sensors (sensor) values("+value+")"
        cursor.execute(sql)
        cnt += 1

    print 'Success'

    connector.commit()
    cursor.close()
    connector.close()
