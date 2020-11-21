<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../style/newcourse.css">
		<title>C Language</title>
	<head>
	
	<body>
			<h1>
				<font color="White">Online Study Point</font>
			</h1>
	
			<h3>
				&emsp;<a href="../Home.php">Home</font></a> &ensp; |
				&emsp;<a href="../course.php">Course</font></a> &ensp; |
				&emsp;<a href="../placements.php">Placements</font></a> &ensp; |
				&emsp;<a href="../about us.php">About Study Point</font></a>
			</h3>
	<div class="course">
		<div class="Content">
			<h2>Introduction to the C Programming Language</h2>
				<p>C evolved from a language called B, written by Ken Thompson at Bell Labs in
				1970. Ken used B to write one of the first implementations of UNIX. B in turn was
a descendant of the language BCPL (developed at Cambridge (UK) in 1967), with
most of its instructions removed.
So many instructions were removed in going from BCPL to B, that Dennis Ritchie
of Bell Labs put some back in (in 1972), and called the language C.
The famous book The C Programming Language was written by Kernighan and
Ritchie in 1978, and was the definitive reference book on C for almost a decade.
The original C was still too limiting, and not standardized, and so in 1983 an ANSI
committee was established to formalise the language definition.
It has taken until now (ten years later) for the ANSI ( American National Standard
Institute) standard to become well accepted and almost universally supported by
compilers.</P>
			<h2>Why Learn C?</h2>
				• Compact, fast, and powerful<br>
				• “Mid-level” Languages<br>
				• Standard for program development (wide acceptance)<br>
				• It is everywhere! (portable)<br>
				• Supports modular programming style<br>
				• Useful for all applications<br>
				• C is the native language of UNIX<br>
				• Easy to interface with system devices/assembly routines<br>
				• C is terse
			<h2>Canonical First Program</h2>
				<b>• The following program is written in the C programming language:</b><br>
				  	#include &lt;stdio.h&gt;
					main()<br>
					{<br>
						/* My first program */<br>
						printf("Hello World! \n");<br>
					}
				<p>• C is case sensitive. All commands in C must be lowercase.<br>
• C has a free-form line structure. End of each statement must be marked
with a semicolon. Multiple statements can be on the same line. White space is
ignored. Statements can continue over many lines.</p>
			<h2>Header Files</h2>
					<p>• Header files contain definitions of functions and variables which can be
incorporated into any C program by using the pre-processor #include statement.
Standard header files are provided with each compiler, and cover a range of areas:
string handling, mathematics, data conversion, printing and reading of variables, etc.</P>
<p>• To use any of the standard functions, the appropriate header file should be included.
This is done at the beginning of the C source file. For example, to use the function
printf() in a program, the line</b>
<p style="text-align:center;">#include &lt;stdio.h&gt;</p>
<p></p>• should be at the beginning of the source file, because the declaration for printf() is
found in the file stdio.h. All header files have the extension .h and generally reside
in the /usr/include subdirectory.</p>
<p style="text-align:center;">#include &lt;string.h&gt;<br>
#include &lt;math.h&gt;<br>
#include "mylib.h"</p>
<p>• The use of angle brackets <> informs the compiler to search the compiler’s include
directories for the specified file. The use of the double quotes "" around the filename
informs the compiler to start the search in the current directory for the specified file.</p>
			
		</div>
	</div>
		</body>
</html>		