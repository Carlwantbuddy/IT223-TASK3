<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task3 bsit2c delgado</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        h1 { text-align: center; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>

<h1>MySQL Function Examples</h1>

<h2>String Functions</h2>

<table>
    <tr>
        <th>SQL Function</th>
        <th>Description</th>
        <th>Example Code</th>
        <th>Example Output</th>
    </tr>

    <tr>
        <td>ASCII()</td>
        <td>Returns the ASCII value for a character</td>
        <td><code>SELECT ASCII('A');</code></td>
        <td><a href="ASCII.php">View Output</a></td>
    </tr>
    <tr>
        <td>CHAR_LENGTH()</td>
        <td>Returns the length in characters</td>
        <td><code>SELECT CHAR_LENGTH('Hello');</code></td>
        <td><a href="CHAR_LENGTH.php">View Output</a></td>
    </tr>
    <tr>
        <td>CHARACTER_LENGTH()</td>
        <td>Same as CHAR_LENGTH()</td>
        <td><code>SELECT CHARACTER_LENGTH('Hello');</code></td>
        <td><a href="CHARACTER_LENGTH.php">View Output</a></td>
    </tr>
    <tr>
        <td>CONCAT()</td>
        <td>Concatenates two or more strings</td>
        <td><code>SELECT CONCAT('Hello',' World');</code></td>
        <td><a href="CONCAT.php">View Output</a></td>
    </tr>
    <tr>
        <td>CONCAT_WS()</td>
        <td>Concatenates with separator</td>
        <td><code>SELECT CONCAT_WS('-', '2025','02','04');</code></td>
        <td><a href="CONCAT_WS.php">View Output</a></td>
    </tr>
    <tr>
        <td>FIELD()</td><td>Returns index of value in list</td>
        <td><code>SELECT FIELD('b','a','b','c');</code></td>
        <td><a href="FIELD.php">View Output</a></td>
    </tr>
    <tr>
        <td>FIND_IN_SET()</td>
        <td>Finds position in set</td>
        <td><code>SELECT FIND_IN_SET('b','a,b,c');</code></td>
        <td><a href="FIND_IN_SET.php">View Output</a></td>
    </tr>
    <tr>
        <td>FORMAT()</td>
        <td>Formats number</td><td><code>SELECT FORMAT(12345.678,2);</code></td>
        <td><a href="FORMAT.php">View Output</a></td>
    </tr>
    <tr>
        <td>INSERT()</td>
        <td>Inserts string</td>
        <td><code>SELECT INSERT('12345',2,2,'AB');</code></td>
        <td><a href="INSERT.php">View Output</a></td>
    </tr>
    <tr>
        <td>INSTR()</td>
        <td>Finds first occurrence</td>
        <td><code>SELECT INSTR('Database','a');</code></td>
        <td><a href="INSTR.php">View Output</a></td>
    </tr>
    <tr>
        <td>LCASE()</td>
        <td>Converts to lowercase</td>
        <td><code>SELECT LCASE('HELLO');</code></td>
        <td><a href="LCASE.php">View Output</a></td>
    </tr>
    <tr>
        <td>LEFT()</td>
        <td>Extracts left portion</td>
        <td><code>SELECT LEFT('Hello',3);</code></td>
        <td><a href="LEFT.php">View Output</a></td>
    </tr>
    <tr>
        <td>LENGTH()</td>
        <td>Returns length in bytes</td>
        <td><code>SELECT LENGTH('Hi');</code></td>
        <td><a href="LENGTH.php">View Output</a></td>
    </tr>
    <tr>
        <td>LOCATE()</td>
        <td>Finds substring position</td>
        <td><code>SELECT LOCATE('l','Hello');</code></td>
        <td><a href="LOCATE.php">View Output</a></td>
    </tr>
    <tr>
        <td>LOWER()</td>
        <td>Converts to lowercase</td>
        <td><code>SELECT LOWER('HELLO');</code></td>
        <td><a href="LOWER.php">View Output</a></td>
    </tr>
    <tr>
        <td>LPAD()</td>
        <td>Left-pads a string</td>
        <td><code>SELECT LPAD('7',3,'0');</code></td>
        <td><a href="LPAD.php">View Output</a></td>
    </tr>
    <tr>
        <td>LTRIM()</td>
        <td>Removes leading spaces</td>
        <td><code>SELECT LTRIM('  hey');</code></td>
        <td><a href="LTRIM.php">View Output</a></td>
    </tr>
    <tr>
        <td>MID()</td>
        <td>Extracts substring</td>
        <td><code>SELECT MID('Hello',2,3);</code></td>
        <td><a href="MID.php">View Output</a></td>
    </tr>
    <tr>
        <td>POSITION()</td>
        <td>First position of substring</td>
        <td><code>SELECT POSITION('e' IN 'Hello');</code></td>
        <td><a href="POSITION.php">View Output</a></td>
    </tr>
    <tr>
        <td>REPEAT()</td>
        <td>Repeats a string</td>
        <td><code>SELECT REPEAT('Hi',3);</code></td>
        <td><a href="REPEAT.php">View Output</a></td>
    </tr>
    <tr>
        <td>REPLACE()</td>
        <td>Replaces substring</td>
        <td><code>SELECT REPLACE('aba','a','x');</code></td>
        <td><a href="REPLACE.php">View Output</a></td>
    </tr>
    <tr>
        <td>REVERSE()</td>
        <td>Reverses string</td>
        <td><code>SELECT REVERSE('Hi');</code></td>
        <td><a href="REVERSE.php">View Output</a></td>
    </tr>
    <tr>
        <td>RIGHT()</td>
        <td>Extracts right portion</td>
        <td><code>SELECT RIGHT('Hello',2);</code></td>
        <td><a href="RIGHT.php">View Output</a></td>
    </tr>
    <tr>
        <td>RPAD()</td>
        <td>Right-pads a string</td>
        <td><code>SELECT RPAD('7',3,'0');</code></td>
        <td><a href="RPAD.php">View Output</a></td>
    </tr>
    <tr>
        <td>RTRIM()</td>
        <td>Removes trailing spaces</td>
        <td><code>SELECT RTRIM('hey  ');</code></td>
        <td><a href="RTRIM.php">View Output</a></td>
    </tr>
    <tr>
        <td>SPACE()</td>
        <td>Returns spaces</td>
        <td><code>SELECT SPACE(3);</code></td>
        <td><a href="SPACE.php">View Output</a></td>
    </tr>
    <tr>
        <td>STRCMP()</td>
        <td>Compares strings</td>
        <td><code>SELECT STRCMP('a','b');</code></td>
        <td><a href="STRCMP.php">View Output</a></td>
    </tr>
    <tr>
        <td>SUBSTR()</td>
        <td>Extracts substring</td>
        <td><code>SELECT SUBSTR('Hello',2,3);</code></td>
        <td><a href="SUBSTR.php">View Output</a></td>
    </tr>
    <tr>
        <td>SUBSTRING()</td>
        <td>Extracts substring</td>
        <td><code>SELECT SUBSTRING('Hello',2,3);</code></td>
        <td><a href="SUBSTRING.php">View Output</a></td>
    </tr>
    <tr>
        <td>SUBSTRING_INDEX()</td>
        <td>Substring before delimiter</td>
        <td><code>SELECT SUBSTRING_INDEX('a,b,c',',',2);</code></td>
        <td><a href="SUBSTRING_INDEX.php">View Output</a></td>
    </tr>
    <tr>
        <td>TRIM()</td>
        <td>Removes spaces</td>
        <td><code>SELECT TRIM('  hi  ');</code></td>
        <td><a href="TRIM.php">View Output</a></td>
    </tr>
    <tr>
        <td>UCASE()</td>
        <td>Uppercase</td>
        <td><code>SELECT UCASE('hi');</code></td>
        <td><a href="UCASE.php">View Output</a></td>
    </tr>
    <tr>
        <td>UPPER()</td>
        <td>Uppercase</td>
        <td><code>SELECT UPPER('hi');</code></td>
        <td><a href="UPPER.php">View Output</a></td>
    </tr>
</table>

<h2>Numeric Functions</h2>

<table>
    <tr>
        <th>SQL Function</th>
        <th>Description</th>
        <th>Example Code</th>
        <th>Example Output</th>
    </tr>

    <tr>
        <td>ABS()</td>
        <td>Returns absolute value</td>
        <td><code>SELECT ABS(-15);</code></td>
        <td><a href="ABS.php">View Output</a></td>
    </tr>
    <tr>
        <td>ACOS()</td>
        <td>Returns arc cosine (radians)</td>
        <td><code>SELECT ACOS(1);</code></td>
        <td><a href="ACOS.php">View Output</a></td>
    </tr>
    <tr>
        <td>ASIN()</td>
        <td>Returns arc sine (radians)</td>
        <td><code>SELECT ASIN(0);</code></td>
        <td><a href="ASIN.php">View Output</a></td>
    </tr>
    <tr>
        <td>ATAN()</td>
        <td>Returns arc tangent (radians)</td>
        <td><code>SELECT ATAN(1);</code></td>
        <td><a href="ATAN.php">View Output</a></td>
    </tr>
    <tr>
        <td>ATAN2()</td>
        <td>Returns arc tangent of two arguments</td>
        <td><code>SELECT ATAN2(1,1);</code></td>
        <td><a href="ATAN2.php">View Output</a></td>
    </tr>
    <tr>
        <td>AVG()</td>
        <td>Returns average value</td>
        <td><code>SELECT AVG(10+id) FROM sample_numbers;</code></td>
        <td><a href="AVG.php">View Output</a></td>
    </tr>
    <tr>
        <td>CEIL()</td>
        <td>Returns smallest integer >= value</td>
        <td><code>SELECT CEIL(4.3);</code></td>
        <td><a href="CEIL.php">View Output</a></td>
    </tr>
    <tr>
        <td>CEILING()</td>
        <td>Same as CEIL()</td>
        <td><code>SELECT CEILING(4.3);</code></td>
        <td><a href="CEILING.php">View Output</a></td>
    </tr>
    <tr>
        <td>COS()</td>
        <td>Returns cosine of angle (radians)</td>
        <td><code>SELECT COS(0);</code></td>
        <td><a href="COS.php">View Output</a></td>
    </tr>
    <tr>
        <td>COT()</td>
        <td>Returns cotangent of angle (radians)</td>
        <td><code>SELECT COT(PI()/4);</code></td>
        <td><a href="COT.php">View Output</a></td>
    </tr>
    <tr>
        <td>COUNT()</td>
        <td>Returns number of rows</td>
        <td><code>SELECT COUNT(*) FROM sample_numbers;</code></td>
        <td><a href="COUNT.php">View Output</a></td>
    </tr>
    <tr>
        <td>DEGREES()</td>
        <td>Converts radians to degrees</td>
        <td><code>SELECT DEGREES(PI());</code></td>
        <td><a href="DEGREES.php">View Output</a></td>
    </tr>
    <tr>
        <td>DIV()</td>
        <td>Integer division</td>
        <td><code>SELECT 10 DIV 3;</code></td>
        <td><a href="DIV.php">View Output</a></td>
    </tr>
    <tr>
        <td>EXP()</td>
        <td>Returns e^x</td>
        <td><code>SELECT EXP(1);</code></td>
        <td><a href="EXP.php">View Output</a></td>
    </tr>
    <tr>
        <td>FLOOR()</td>
        <td>Returns largest integer <= value</td>
        <td><code>SELECT FLOOR(4.7);</code></td>
        <td><a href="FLOOR.php">View Output</a></td>
    </tr>
    <tr>
        <td>GREATEST()</td>
        <td>Returns largest value from list</td>
        <td><code>SELECT GREATEST(10,20,15);</code></td>
        <td><a href="GREATEST.php">View Output</a></td>
    </tr>
    <tr>
        <td>LEAST()</td>
        <td>Returns smallest value from list</td>
        <td><code>SELECT LEAST(10,20,15);</code></td>
        <td><a href="LEAST.php">View Output</a></td>
    </tr>
    <tr>
        <td>LN()</td>
        <td>Returns natural logarithm</td>
        <td><code>SELECT LN(10);</code></td>
        <td><a href="LN.php">View Output</a></td>
    </tr>
    <tr>
        <td>LOG()</td>
        <td>Returns natural log or base-n log</td>
        <td><code>SELECT LOG(10);</code></td>
        <td><a href="LOG.php">View Output</a></td>
    </tr>
    <tr>
        <td>LOG10()</td>
        <td>Returns base-10 logarithm</td>
        <td><code>SELECT LOG10(100);</code></td>
        <td><a href="LOG10.php">View Output</a></td>
    </tr>
    <tr>
        <td>LOG2()</td>
        <td>Returns base-2 logarithm</td>
        <td><code>SELECT LOG2(8);</code></td>
        <td><a href="LOG2.php">View Output</a></td>
    </tr>
    <tr>
        <td>MAX()</td>
        <td>Returns maximum value</td>
        <td><code>SELECT MAX(id) FROM sample_numbers;</code></td>
        <td><a href="MAX.php">View Output</a></td>
    </tr>
    <tr>
        <td>MIN()</td>
        <td>Returns minimum value</td>
        <td><code>SELECT MIN(id) FROM sample_numbers;</code></td>
        <td><a href="MIN.php">View Output</a></td>
    </tr>
    <tr>
        <td>MOD()</td>
        <td>Returns remainder</td>
        <td><code>SELECT MOD(10,3);</code></td>
        <td><a href="MOD.php">View Output</a></td>
    </tr>
    <tr>
        <td>PI()</td>
        <td>Returns PI value</td>
        <td><code>SELECT PI();</code></td>
        <td><a href="PI.php">View Output</a></td>
    </tr>
    <tr>
        <td>POW()</td>
        <td>Returns x^y</td>
        <td><code>SELECT POW(2,3);</code></td>
        <td><a href="POW.php">View Output</a></td>
    </tr>
    <tr>
        <td>POWER()</td>
        <td>Returns x^y</td>
        <td><code>SELECT POWER(2,3);</code></td>
        <td><a href="POWER.php">View Output</a></td>
    </tr>
    <tr>
        <td>RADIANS()</td>
        <td>Converts degrees to radians</td>
        <td><code>SELECT RADIANS(180);</code></td>
        <td><a href="RADIANS.php">View Output</a></td>
    </tr>
    <tr>
        <td>RAND()</td>
        <td>Generates random number</td>
        <td><code>SELECT RAND();</code></td>
        <td><a href="RAND.php">View Output</a></td>
    </tr>
    <tr>
        <td>ROUND()</td><td>Rounds number</td>
        <td><code>SELECT ROUND(4.567,2);</code></td>
        <td><a href="ROUND.php">View Output</a></td>
    </tr>
    <tr>
        <td>SIGN()</td><td>Returns sign of number</td>
        <td><code>SELECT SIGN(-10);</code></td>
        <td><a href="SIGN.php">View Output</a></td>
    </tr>
    <tr>
        <td>SIN()</td>
        <td>Returns sine of angle (radians)</td>
        <td><code>SELECT SIN(PI()/2);</code></td>
        <td><a href="SIN.php">View Output</a></td>
    </tr>
    <tr>
        <td>SQRT()</td>
        <td>Returns square root</td>
        <td><code>SELECT SQRT(16);</code></td>
        <td><a href="SQRT.php">View Output</a></td>
    </tr>
    <tr>
        <td>SUM()</td>
        <td>Returns sum of column</td>
        <td><code>SELECT SUM(id) FROM sample_numbers;</code></td>
        <td><a href="SUM.php">View Output</a></td>
    </tr>
    <tr>
        <td>TAN()</td>
        <td>Returns tangent of angle (radians)</td>
        <td><code>SELECT TAN(PI()/4);</code></td>
        <td><a href="TAN.php">View Output</a></td>
    </tr>
    <tr>
        <td>TRUNCATE()</td>
        <td>Truncates number</td>
        <td><code>SELECT TRUNCATE(4.567,2);</code></td>
        <td><a href="TRUNCATE.php">View Output</a></td>
    </tr>
</table>

<h2>Date Functions</h2>

<table>
    <tr>
        <th>SQL Function</th>
        <th>Description</th>
        <th>Example Code</th>
        <th>Example Output</th>
    </tr>

    <tr>
        <td>ADDDATE()</td>
        <td>Adds a date or interval</td>
        <td><code>SELECT ADDDATE(NOW(), INTERVAL 5 DAY);</code></td>
        <td><a href="ADDDATE.php">View Output</a></td>
    </tr>
    <tr>
        <td>ADDTIME()</td>
        <td>Adds a time interval</td>
        <td><code>SELECT ADDTIME('10:00:00', '02:30:00');</code></td>
        <td><a href="ADDTIME.php">View Output</a></td>
    </tr>
        <tr><td>CURDATE()</td>
        <td>Returns current date</td>
        <td><code>SELECT CURDATE();</code></td>
        <td><a href="CURDATE.php">View Output</a></td>
    </tr>
    <tr>
        <td>CURRENT_DATE()</td>
        <td>Returns current date</td>
        <td><code>SELECT CURRENT_DATE();</code></td>
        <td><a href="CURRENT_DATE.php">View Output</a></td>
    </tr>
    <tr>
        <td>CURRENT_TIME()</td>
        <td>Returns current time</td>
        <td><code>SELECT CURRENT_TIME();</code></td>
        <td><a href="CURRENT_TIME.php">View Output</a></td>
    </tr>
    <tr>
        <td>CURRENT_TIMESTAMP()</td>
        <td>Returns current date and time</td>
        <td><code>SELECT CURRENT_TIMESTAMP();</code></td>
        <td><a href="CURRENT_TIMESTAMP.php">View Output</a></td>
    </tr>
    <tr>
        <td>CURTIME()</td>
        <td>Returns current time</td>
        <td><code>SELECT CURTIME();</code></td>
        <td><a href="CURTIME.php">View Output</a></td>
    </tr>
    <tr>
        <td>DATE()</td>
        <td>Extracts the date part</td>
        <td><code>SELECT DATE(NOW());</code></td>
        <td><a href="DATE.php">View Output</a></td>
    </tr>
    <tr>
        <td>DATEDIFF()</td>
        <td>Returns difference between dates</td>
        <td><code>SELECT DATEDIFF('2026-02-04', '2026-01-01');</code></td>
        <td><a href="DATEDIFF.php">View Output</a></td>
    </tr>
    <tr>
        <td>DATE_ADD()</td>
        <td>Adds interval to date</td>
        <td><code>SELECT DATE_ADD(NOW(), INTERVAL 5 DAY);</code></td>
        <td><a href="DATE_ADD.php">View Output</a></td>
    </tr>
    <tr>
        <td>DATE_FORMAT()</td>
        <td>Formats date</td>
        <td><code>SELECT DATE_FORMAT(NOW(), '%Y-%m-%d');</code></td>
        <td><a href="DATE_FORMAT.php">View Output</a></td>
    </tr>
    <tr>
        <td>DATE_SUB()</td>
        <td>Subtracts interval from date</td>
        <td><code>SELECT DATE_SUB(NOW(), INTERVAL 5 DAY);</code></td>
        <td><a href="DATE_SUB.php">View Output</a></td>
    </tr>
    <tr>
        <td>DAY()</td>
        <td>Returns day of month</td>
        <td><code>SELECT DAY(NOW());</code></td>
        <td><a href="DAY.php">View Output</a></td>
    </tr>
    <tr>
        <td>DAYNAME()</td>
        <td>Returns weekday name</td>
        <td><code>SELECT DAYNAME(NOW());</code></td>
        <td><a href="DAYNAME.php">View Output</a></td>
    </tr>
    <tr>
        <td>DAYOFMONTH()</td>
        <td>Returns day of month</td>
        <td><code>SELECT DAYOFMONTH(NOW());</code></td>
        <td><a href="DAYOFMONTH.php">View Output</a></td>
    </tr>
    <tr>
        <td>DAYOFWEEK()</td>
        <td>Returns day of week (1=Sunday)</td>
        <td><code>SELECT DAYOFWEEK(NOW());</code></td>
        <td><a href="DAYOFWEEK.php">View Output</a></td>
    </tr>
    <tr>
        <td>DAYOFYEAR()</td>
        <td>Returns day of year</td>
        <td><code>SELECT DAYOFYEAR(NOW());</code></td>
        <td><a href="DAYOFYEAR.php">View Output</a></td>
    </tr>
    <tr>
        <td>EXTRACT()</td>
        <td>Extracts part of date</td>
        <td><code>SELECT EXTRACT(YEAR FROM NOW());</code></td>
        <td><a href="EXTRACT.php">View Output</a></td>
    </tr>
    <tr>
        <td>FROM_DAYS()</td>
        <td>Converts days to date</td>
        <td><code>SELECT FROM_DAYS(738000);</code></td>
        <td><a href="FROMDAYS.php">View Output</a></td>
    </tr>
    <tr>
        <td>HOUR()</td>
        <td>Returns hour</td>
        <td><code>SELECT HOUR(NOW());</code></td>
        <td><a href="HOUR.php">View Output</a></td>
    </tr>
    <tr>
        <td>LAST_DAY()</td>
        <td>Returns last day of month</td>
        <td><code>SELECT LAST_DAY(NOW());</code></td>
        <td><a href="LASTDAY.php">View Output</a></td>
    </tr>
    <tr>
        <td>LOCALTIME()</td>
        <td>Returns current date and time</td>
        <td><code>SELECT LOCALTIME();</code></td>
        <td><a href="LOCALTIME.php">View Output</a></td>
    </tr>
    <tr>
        <td>LOCALTIMESTAMP()</td>
        <td>Returns current timestamp</td>
        <td><code>SELECT LOCALTIMESTAMP();</code></td>
        <td><a href="LOCALTIMESTAMP.php">View Output</a></td>
    </tr>
    <tr>
        <td>MAKEDATE()</td>
        <td>Creates date from year and day of year</td>
        <td><code>SELECT MAKEDATE(2026,35);</code></td>
        <td><a href="MAKEDATE.php">View Output</a></td>
    </tr>
    <tr>
        <td>MAKETIME()</td>
        <td>Creates time from hour, minute, second</td>
        <td><code>SELECT MAKETIME(12,30,45);</code></td>
        <td><a href="MAKETIME.php">View Output</a></td>
    </tr>
    <tr>
        <td>MICROSECOND()</td>
        <td>Returns microseconds</td>
        <td><code>SELECT MICROSECOND(NOW(6));</code></td>
        <td><a href="MICROSECOND.php">View Output</a></td>
    </tr>
    <tr>
        <td>MINUTE()</td>
        <td>Returns minutes</td>
        <td><code>SELECT MINUTE(NOW());</code></td>
        <td><a href="MINUTE.php">View Output</a></td>
    </tr>
    <tr>
        <td>MONTH()</td>
        <td>Returns month number</td>
        <td><code>SELECT MONTH(NOW());</code></td>
        <td><a href="MONTH.php">View Output</a></td>
    </tr>
    <tr>
        <td>MONTHNAME()</td>
        <td>Returns month name</td>
        <td><code>SELECT MONTHNAME(NOW());</code></td>
        <td><a href="MONTHNAME.php">View Output</a></td>
    </tr>
    <tr>
        <td>NOW()</td>
        <td>Returns current date and time</td>
        <td><code>SELECT NOW();</code></td>
        <td><a href="NOW.php">View Output</a></td>
    </tr>
    <tr>
        <td>PERIOD_ADD()</td>
        <td>Adds months to period</td>
        <td><code>SELECT PERIOD_ADD(202602,2);</code></td>
        <td><a href="PERIODADD.php">View Output</a></td>
    </tr>
    <tr>
        <td>PERIOD_DIFF()</td>
        <td>Returns difference between periods</td>
        <td><code>SELECT PERIOD_DIFF(202602,202601);</code></td>
        <td><a href="PERIODDIFF.php">View Output</a></td>
    </tr>
    <tr>
        <td>QUARTER()</td>
        <td>Returns quarter of date</td>
        <td><code>SELECT QUARTER(NOW());</code></td>
        <td><a href="QUARTER.php">View Output</a></td>
    </tr>
    <tr>
        <td>SECOND()</td>
        <td>Returns seconds</td>
        <td><code>SELECT SECOND(NOW());</code></td>
        <td><a href="SECOND.php">View Output</a></td>
    </tr>
    <tr>
        <td>SEC_TO_TIME()</td>
        <td>Converts seconds to time</td>
        <td><code>SELECT SEC_TO_TIME(3600);</code></td>
        <td><a href="SEC_TO_TIME.php">View Output</a></td>
    </tr>
    <tr>
        <td>STR_TO_DATE()</td>
        <td>Converts string to date</td>
        <td><code>SELECT STR_TO_DATE('2026-02-04','%Y-%m-%d');</code></td>
        <td><a href="STR_TO_DATE.php">View Output</a></td>
    </tr>
    <tr>
        <td>SUBDATE()</td>
        <td>Subtracts interval from date</td>
        <td><code>SELECT SUBDATE(NOW(), INTERVAL 5 DAY);</code></td>
        <td><a href="SUBDATE.php">View Output</a></td>
    </tr>
    <tr>
        <td>SUBTIME()</td>
        <td>Subtracts time</td>
        <td><code>SELECT SUBTIME(NOW(), '01:00:00');</code></td>
        <td><a href="SUBTIME.php">View Output</a></td>
    </tr>
    <tr>
        <td>SYSDATE()</td>
        <td>Returns current date and time</td>
        <td><code>SELECT SYSDATE();</code></td>
        <td><a href="SYSDATE.php">View Output</a></td>
    </tr>
    <tr>
        <td>TIME()</td>
        <td>Extracts time from datetime</td>
        <td><code>SELECT TIME(NOW());</code></td>
        <td><a href="TIME.php">View Output</a></td>
    </tr>
    <tr>
        <td>TIME_FORMAT()</td>
        <td>Formats time</td>
        <td><code>SELECT TIME_FORMAT(NOW(), '%H:%i:%s');</code></td>
        <td><a href="TIME_FORMAT.php">View Output</a></td></tr>
    <tr>
        <td>TIME_TO_SEC()</td>
        <td>Converts time to seconds</td>
        <td><code>SELECT TIME_TO_SEC('01:00:00');</code></td>
        <td><a href="TIME_TO_SEC.php">View Output</a></td></tr>
    <tr>
        <td>TIMEDIFF()</td>
        <td>Returns difference between times</td>
        <td><code>SELECT TIMEDIFF('2026-02-04 12:00:00','2026-02-04 09:00:00');</code></td>
        <td><a href="TIMEDIFF.php">View Output</a></td>
    </tr>
    <tr>
        <td>TIMESTAMP()</td>
        <td>Returns date and time</td>
        <td><code>SELECT TIMESTAMP(NOW());</code></td>
        <td><a href="TIMESTAMP.php">View Output</a></td>
    </tr>
    <tr>
        <td>TO_DAYS()</td>
        <td>Converts date to days</td>
        <td><code>SELECT TO_DAYS(NOW());</code></td>
        <td><a href="TO_DAYS.php">View Output</a></td>
    </tr>
    <tr>
        <td>WEEK()</td>
        <td>Returns week number</td>
        <td><code>SELECT WEEK(NOW());</code></td>
        <td><a href="WEEK.php">View Output</a></td>
    </tr>
    <tr>
        <td>WEEKDAY()</td>
        <td>Returns weekday (0=Monday)</td>
        <td><code>SELECT WEEKDAY(NOW());</code></td>
        <td><a href="WEEKDAY.php">View Output</a></td>
    </tr>
    <tr>
        <td>WEEKOFYEAR()</td>
        <td>Returns week of year</td>
        <td><code>SELECT WEEKOFYEAR(NOW());</code></td>
        <td><a href="WEEKOFYEAR.php">View Output</a></td>
    </tr>
    <tr>
        <td>YEAR()</td>
        <td>Returns year</td>
        <td><code>SELECT YEAR(NOW());</code></td>
        <td><a href="YEAR.php">View Output</a>
    </td></tr>
    <tr>
        <td>YEARWEEK()</td>
        <td>Returns year and week</td>
        <td><code>SELECT YEARWEEK(NOW());</code></td>
        <td><a href="YEARSWEEK.php">View Output</a></td>
    </tr>
</table>


<h2>Advanced Functions</h2>

<table>
    <tr>
        <th>SQL Function</th>
        <th>Description</th>
        <th>Example Code</th>
        <th>Example Output</th>
    </tr>

    <tr>
        <td>BIN()</td>
        <td>Returns a binary representation of a number</td>
        <td><code>SELECT BIN(10);</code></td>
        <td><a href="BIN.php">View Output</a></td>
    </tr>
    <tr>
        <td>BINARY()</td>
        <td>Converts a value to a binary string</td>
        <td><code>SELECT BINARY 'Hello';</code></td>
        <td><a href="BINARY.php">View Output</a></td>
    </tr>
    <tr>
        <td>CASE</td>
        <td>Returns value based on conditions</td>
        <td><code>SELECT CASE WHEN 1 &lt; 2 THEN 'Yes' ELSE 'No' END;</code></td>
        <td><a href="CASE.php">View Output</a></td>
    </tr>
    <tr>
        <td>CAST()</td>
        <td>Converts value to specified datatype</td>
        <td><code>SELECT CAST(123 AS CHAR);</code></td>
        <td><a href="CAST.php">View Output</a></td>
    </tr>
    <tr>
        <td>COALESCE()</td>
        <td>Returns first non-null value</td>
        <td><code>SELECT COALESCE(NULL, NULL, 'Value');</code></td>
        <td><a href="COALESCE.php">View Output</a></td>
    </tr>
    <tr>
        <td>CONNECTION_ID()</td>
        <td>Returns the connection ID for current session</td>
        <td><code>SELECT CONNECTION_ID();</code></td>
        <td><a href="CONNECTION_ID.php">View Output</a></td>
    </tr>
    <tr>
        <td>CONV()</td>
        <td>Converts a number from one base to another</td>
        <td><code>SELECT CONV(10, 10, 2);</code></td>
        <td><a href="CONV.php">View Output</a></td>
    </tr>
    <tr>
        <td>CONVERT()</td>
        <td>Converts value to specified type or character set</td>
        <td><code>SELECT CONVERT('123', SIGNED);</code></td>
        <td><a href="CONVERT.php">View Output</a></td>
    </tr>
    <tr>
        <td>CURRENT_USER()</td>
        <td>Returns the authenticated MySQL user</td>
        <td><code>SELECT CURRENT_USER();</code></td>
        <td><a href="CURRENT_USER.php">View Output</a></td>
    </tr>
    <tr>
        <td>DATABASE()</td>
        <td>Returns the current database name</td>
        <td><code>SELECT DATABASE();</code></td>
        <td><a href="DATABASE.php">View Output</a></td>
    </tr>
    <tr>
        <td>IF()</td>
        <td>Returns a value if TRUE, another if FALSE</td>
        <td><code>SELECT IF(1=1, 'Yes','No');</code></td>
        <td><a href="IF.php">View Output</a></td>
    </tr>
    <tr>
        <td>IFNULL()</td>
        <td>Returns value if expression is NULL</td>
        <td><code>SELECT IFNULL(NULL, 'No');</code></td>
        <td><a href="IFNULL.php">View Output</a></td>
    </tr>
    <tr>
        <td>ISNULL()</td>
        <td>Returns 1 if expression is NULL</td>
        <td><code>SELECT ISNULL(NULL);</code></td>
        <td><a href="ISNULL.php">View Output</a></td>
    </tr>
    <tr>
        <td>LAST_INSERT_ID()</td>
        <td>Returns last auto‑increment ID</td>
        <td><code>SELECT LAST_INSERT_ID();</code></td>
        <td><a href="LAST_INSERT_ID.php">View Output</a></td>
    </tr>
    <tr>
        <td>NULLIF()</td>
        <td>Returns NULL if expressions are equal</td>
        <td><code>SELECT NULLIF(1,1);</code></td>
        <td><a href="NULLIF.php">View Output</a></td>
    </tr>
    <tr>
        <td>SESSION_USER()</td>
        <td>Returns session user name</td>
        <td><code>SELECT SESSION_USER();</code></td>
        <td><a href="SESSION_USER.php">View Output</a></td>
    </tr>
    <tr>
        <td>SYSTEM_USER()</td>
        <td>Returns system user name</td>
        <td><code>SELECT SYSTEM_USER();</code></td>
        <td><a href="SYSTEM_USER.php">View Output</a></td>
    </tr>
    <tr>
        <td>USER()</td><td>Returns MySQL user and host</td>
        <td><code>SELECT USER();</code></td>
        <td><a href="USER.php">View Output</a></td>
    </tr>
    <tr>
        <td>VERSION()</td>
        <td>Returns MySQL version</td>
        <td><code>SELECT VERSION();</code></td>
        <td><a href="VERSION.php">View Output</a></td>
    </tr>
</table>


<?php include 'db_connect.php'; ?>

</body>
</html>