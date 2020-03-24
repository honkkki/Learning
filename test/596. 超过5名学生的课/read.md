## 请列出所有超过或等于5名学生的课。
     示例：
     有一个courses 表 ，有: student (学生) 和 class (课程)。
     
     请列出所有超过或等于5名学生的课。
     
     例如,表:
     
     +---------+------------+
     | student | class      |
     +---------+------------+
     | A       | Math       |
     | B       | English    |
     | C       | Math       |
     | D       | Biology    |
     | E       | Math       |
     | F       | Computer   |
     | G       | Math       |
     | H       | Math       |
     | I       | Math       |
     +---------+------------+
     应该输出:
     
     +---------+
     | class   |
     +---------+
     | Math    |
     +---------+
     Note:
     学生在每个课中不应被重复计算。

 
`解题思路`

1 使用group by和having

    `select class
     from courses
     group by class
     having count(distinct student) >= 5;`
     
2 使用嵌套子查询

        `select class
         from (select class, count(distinct student) as c from courses group by class) as b
         where b.c >= 5;`
    
