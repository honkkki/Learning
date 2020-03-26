## 给定一个 Weather 表，编写一个 SQL 查询，来查找与之前（昨天的）日期相比温度更高的所有日期的 Id。
   

     示例：
     给定一个 Weather 表，编写一个 SQL 查询，来查找与之前（昨天的）日期相比温度更高的所有日期的 Id。
     
     +---------+------------------+------------------+
     | Id(INT) | RecordDate(DATE) | Temperature(INT) |
     +---------+------------------+------------------+
     |       1 |       2015-01-01 |               10 |
     |       2 |       2015-01-02 |               25 |
     |       3 |       2015-01-03 |               20 |
     |       4 |       2015-01-04 |               30 |
     +---------+------------------+------------------+
     例如，根据上述给定的 Weather 表格，返回如下 Id:
     
     +----+
     | Id |
     +----+
     |  2 |
     |  4 |
     +----+
  
`解题思路`

1 使用where

    `select a.id from Weather as a ,Weather as b 
     where 
     datediff(a.RecordDate,b.RecordDate)= 1 and a.Temperature >b.Temperature;
`
     
2 使用join

        `select a.id from Weather as a  join Weather as b on
         datediff(a.RecordDate,b.RecordDate)=1 and a.Temperature>b.Temperature`
    
