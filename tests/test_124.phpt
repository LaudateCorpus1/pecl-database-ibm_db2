--TEST--
IBM-DB2: db2_field_name() - by position 2
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php

require_once('connection.inc');

$conn = db2_connect($db, $username, $password);

if ($conn) 
{
   $result = db2_exec($conn, "select * from staff, employee, org where employee.lastname in ('HAAS','THOMPSON', 'KWAN', 'GEYER', 'STERN', 'PULASKI', 'HENDERSON', 'SPENSER', 'LUCCHESSI', 'O''CONNELL', 'QUINTANA', 'NICHOLLS', 'ADAMSON', 'PIANKA', 'YOSHIMURA', 'SCOUTTEN', 'WALKER', 'BROWN', 'JONES', 'LUTZ', 'JEFFERSON', 'MARINO', 'SMITH', 'JOHNSON', 'PEREZ', 'SCHNEIDER', 'PARKER', 'SMITH', 'SETRIGHT', 'MEHTA', 'LEE', 'GOUNOT') order by org.location,employee.lastname,staff.id");
   $cols = db2_num_fields($result);
   $j=0;
   while ($row = db2_fetch_both($result) ) 
   {
      for ($i=0; $i<$cols; $i++) 
      {
         print db2_field_name($result,$i) . ":";
         print $row[db2_field_name($result,$i)] . "\n";
      }
      print "---------\n";	
      $j++;
      if ($j==100) 
         die ("done");
   }
   db2_close($conn);
}
else 
   echo db2_conn_errormsg();

?>
--EXPECT--

ID:10
NAME:Sanders
DEPT:20
JOB:DESIGNER
YEARS:7
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:20
NAME:Pernal
DEPT:20
JOB:DESIGNER
YEARS:8
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:30
NAME:Marenghi
DEPT:38
JOB:DESIGNER
YEARS:5
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:40
NAME:O'Brien
DEPT:38
JOB:DESIGNER
YEARS:6
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:50
NAME:Hanes
DEPT:15
JOB:DESIGNER
YEARS:10
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:60
NAME:Quigley
DEPT:38
JOB:DESIGNER
YEARS:
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:70
NAME:Rothman
DEPT:15
JOB:DESIGNER
YEARS:7
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:80
NAME:James
DEPT:20
JOB:DESIGNER
YEARS:
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:90
NAME:Koonitz
DEPT:42
JOB:DESIGNER
YEARS:6
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:100
NAME:Plotz
DEPT:42
JOB:DESIGNER
YEARS:7
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:110
NAME:Ngan
DEPT:15
JOB:DESIGNER
YEARS:5
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:120
NAME:Naughton
DEPT:38
JOB:DESIGNER
YEARS:
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:130
NAME:Yamaguchi
DEPT:42
JOB:DESIGNER
YEARS:6
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:140
NAME:Fraye
DEPT:51
JOB:DESIGNER
YEARS:6
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:150
NAME:Williams
DEPT:51
JOB:DESIGNER
YEARS:6
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:160
NAME:Molinare
DEPT:10
JOB:DESIGNER
YEARS:7
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:170
NAME:Kermisch
DEPT:15
JOB:DESIGNER
YEARS:4
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:180
NAME:Abrahams
DEPT:38
JOB:DESIGNER
YEARS:3
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:190
NAME:Sneider
DEPT:20
JOB:DESIGNER
YEARS:8
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:200
NAME:Scoutten
DEPT:42
JOB:DESIGNER
YEARS:
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:210
NAME:Lu
DEPT:10
JOB:DESIGNER
YEARS:10
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:220
NAME:Smith
DEPT:51
JOB:DESIGNER
YEARS:7
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:230
NAME:Lundquist
DEPT:51
JOB:DESIGNER
YEARS:3
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:240
NAME:Daniels
DEPT:10
JOB:DESIGNER
YEARS:5
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:250
NAME:Wheeler
DEPT:51
JOB:DESIGNER
YEARS:6
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:260
NAME:Jones
DEPT:10
JOB:DESIGNER
YEARS:12
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:270
NAME:Lea
DEPT:66
JOB:DESIGNER
YEARS:9
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:280
NAME:Wilson
DEPT:66
JOB:DESIGNER
YEARS:9
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:290
NAME:Quill
DEPT:84
JOB:DESIGNER
YEARS:10
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:300
NAME:Davis
DEPT:84
JOB:DESIGNER
YEARS:5
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:310
NAME:Graham
DEPT:66
JOB:DESIGNER
YEARS:13
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:320
NAME:Gonzales
DEPT:66
JOB:DESIGNER
YEARS:4
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:330
NAME:Burke
DEPT:66
JOB:DESIGNER
YEARS:1
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:340
NAME:Edwards
DEPT:84
JOB:DESIGNER
YEARS:7
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:350
NAME:Gafney
DEPT:84
JOB:DESIGNER
YEARS:5
SALARY:25280.00
COMM:2022.00
EMPNO:000150
FIRSTNME:BRUCE
MIDINIT: 
LASTNAME:ADAMSON
WORKDEPT:D11
PHONENO:4510
HIREDATE:1972-02-12
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1947-05-17
SALARY:25280.00
BONUS:500.00
COMM:2022.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:10
NAME:Sanders
DEPT:20
JOB:DESIGNER
YEARS:7
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:20
NAME:Pernal
DEPT:20
JOB:DESIGNER
YEARS:8
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:30
NAME:Marenghi
DEPT:38
JOB:DESIGNER
YEARS:5
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:40
NAME:O'Brien
DEPT:38
JOB:DESIGNER
YEARS:6
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:50
NAME:Hanes
DEPT:15
JOB:DESIGNER
YEARS:10
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:60
NAME:Quigley
DEPT:38
JOB:DESIGNER
YEARS:
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:70
NAME:Rothman
DEPT:15
JOB:DESIGNER
YEARS:7
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:80
NAME:James
DEPT:20
JOB:DESIGNER
YEARS:
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:90
NAME:Koonitz
DEPT:42
JOB:DESIGNER
YEARS:6
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:100
NAME:Plotz
DEPT:42
JOB:DESIGNER
YEARS:7
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:110
NAME:Ngan
DEPT:15
JOB:DESIGNER
YEARS:5
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:120
NAME:Naughton
DEPT:38
JOB:DESIGNER
YEARS:
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:130
NAME:Yamaguchi
DEPT:42
JOB:DESIGNER
YEARS:6
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:140
NAME:Fraye
DEPT:51
JOB:DESIGNER
YEARS:6
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:150
NAME:Williams
DEPT:51
JOB:DESIGNER
YEARS:6
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:160
NAME:Molinare
DEPT:10
JOB:DESIGNER
YEARS:7
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:170
NAME:Kermisch
DEPT:15
JOB:DESIGNER
YEARS:4
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:180
NAME:Abrahams
DEPT:38
JOB:DESIGNER
YEARS:3
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:190
NAME:Sneider
DEPT:20
JOB:DESIGNER
YEARS:8
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:200
NAME:Scoutten
DEPT:42
JOB:DESIGNER
YEARS:
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:210
NAME:Lu
DEPT:10
JOB:DESIGNER
YEARS:10
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:220
NAME:Smith
DEPT:51
JOB:DESIGNER
YEARS:7
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:230
NAME:Lundquist
DEPT:51
JOB:DESIGNER
YEARS:3
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:240
NAME:Daniels
DEPT:10
JOB:DESIGNER
YEARS:5
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:250
NAME:Wheeler
DEPT:51
JOB:DESIGNER
YEARS:6
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:260
NAME:Jones
DEPT:10
JOB:DESIGNER
YEARS:12
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:270
NAME:Lea
DEPT:66
JOB:DESIGNER
YEARS:9
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:280
NAME:Wilson
DEPT:66
JOB:DESIGNER
YEARS:9
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:290
NAME:Quill
DEPT:84
JOB:DESIGNER
YEARS:10
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:300
NAME:Davis
DEPT:84
JOB:DESIGNER
YEARS:5
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:310
NAME:Graham
DEPT:66
JOB:DESIGNER
YEARS:13
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:320
NAME:Gonzales
DEPT:66
JOB:DESIGNER
YEARS:4
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:330
NAME:Burke
DEPT:66
JOB:DESIGNER
YEARS:1
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:340
NAME:Edwards
DEPT:84
JOB:DESIGNER
YEARS:7
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:350
NAME:Gafney
DEPT:84
JOB:DESIGNER
YEARS:5
SALARY:27740.00
COMM:2217.00
EMPNO:000200
FIRSTNME:DAVID
MIDINIT: 
LASTNAME:BROWN
WORKDEPT:D11
PHONENO:4501
HIREDATE:1966-03-03
JOB:DESIGNER
EDLEVEL:16
SEX:M
BIRTHDATE:1941-05-29
SALARY:27740.00
BONUS:600.00
COMM:2217.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:10
NAME:Sanders
DEPT:20
JOB:MANAGER 
YEARS:7
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:20
NAME:Pernal
DEPT:20
JOB:MANAGER 
YEARS:8
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:30
NAME:Marenghi
DEPT:38
JOB:MANAGER 
YEARS:5
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:40
NAME:O'Brien
DEPT:38
JOB:MANAGER 
YEARS:6
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:50
NAME:Hanes
DEPT:15
JOB:MANAGER 
YEARS:10
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:60
NAME:Quigley
DEPT:38
JOB:MANAGER 
YEARS:
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:70
NAME:Rothman
DEPT:15
JOB:MANAGER 
YEARS:7
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:80
NAME:James
DEPT:20
JOB:MANAGER 
YEARS:
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:90
NAME:Koonitz
DEPT:42
JOB:MANAGER 
YEARS:6
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:100
NAME:Plotz
DEPT:42
JOB:MANAGER 
YEARS:7
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:110
NAME:Ngan
DEPT:15
JOB:MANAGER 
YEARS:5
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:120
NAME:Naughton
DEPT:38
JOB:MANAGER 
YEARS:
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:130
NAME:Yamaguchi
DEPT:42
JOB:MANAGER 
YEARS:6
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:140
NAME:Fraye
DEPT:51
JOB:MANAGER 
YEARS:6
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:150
NAME:Williams
DEPT:51
JOB:MANAGER 
YEARS:6
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:160
NAME:Molinare
DEPT:10
JOB:MANAGER 
YEARS:7
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:170
NAME:Kermisch
DEPT:15
JOB:MANAGER 
YEARS:4
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:180
NAME:Abrahams
DEPT:38
JOB:MANAGER 
YEARS:3
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:190
NAME:Sneider
DEPT:20
JOB:MANAGER 
YEARS:8
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:200
NAME:Scoutten
DEPT:42
JOB:MANAGER 
YEARS:
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:210
NAME:Lu
DEPT:10
JOB:MANAGER 
YEARS:10
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:220
NAME:Smith
DEPT:51
JOB:MANAGER 
YEARS:7
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:230
NAME:Lundquist
DEPT:51
JOB:MANAGER 
YEARS:3
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:240
NAME:Daniels
DEPT:10
JOB:MANAGER 
YEARS:5
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:250
NAME:Wheeler
DEPT:51
JOB:MANAGER 
YEARS:6
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:260
NAME:Jones
DEPT:10
JOB:MANAGER 
YEARS:12
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:270
NAME:Lea
DEPT:66
JOB:MANAGER 
YEARS:9
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:280
NAME:Wilson
DEPT:66
JOB:MANAGER 
YEARS:9
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:290
NAME:Quill
DEPT:84
JOB:MANAGER 
YEARS:10
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
ID:300
NAME:Davis
DEPT:84
JOB:MANAGER 
YEARS:5
SALARY:40175.00
COMM:3214.00
EMPNO:000050
FIRSTNME:JOHN
MIDINIT:B
LASTNAME:GEYER
WORKDEPT:E01
PHONENO:6789
HIREDATE:1949-08-17
JOB:MANAGER 
EDLEVEL:16
SEX:M
BIRTHDATE:1925-09-15
SALARY:40175.00
BONUS:800.00
COMM:3214.00
DEPTNUMB:38
DEPTNAME:South Atlantic
MANAGER:30
DIVISION:Eastern
LOCATION:Atlanta
---------
done
