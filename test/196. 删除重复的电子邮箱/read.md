## 编写一个 SQL 查询，来删除 Person 表中所有重复的电子邮箱，重复的邮箱里只保留 Id 最小 的那个。   
     示例：
    +----+------------------+
    | Id | Email            |
    +----+------------------+
    | 1  | john@example.com |
    | 2  | bob@example.com  |
    | 3  | john@example.com |
    +----+------------------+
    Id 是这个表的主键。
    例如，在运行你的查询语句之后，上面的 Person 表应返回以下几行:
    
    +----+------------------+
    | Id | Email            |
    +----+------------------+
    | 1  | john@example.com |
    | 2  | bob@example.com  |
    +----+------------------+
     
    
    提示：
    
    执行 SQL 之后，输出是整个 Person 表。
    使用 delete 语句。
   
 
`解题思路`

1 not in

    `delete
     from Person
     where id not in (
         select id
         from (select min(id) as id from Person GROUP BY Email) AS temp)`
     
2left join on

        `delete a from Person as a,Person as b where a.Email=b.Email and a.id>b.id`
    