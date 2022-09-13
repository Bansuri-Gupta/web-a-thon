# Web-a-thon
This repository include an education portal with its user as admin and faculty, which is actually a work allocation portal for allocating courses to faculties of the university.
In Admin login, expected functionalities are as follows
#Page 1
“Upload Courses”
Upload Courses details in an excelsheet, which needs to be parsed and stored in the database.
#Page 2
“View and Add Courses”
In view page, fetch all courses from the database and display. Provide option for admin to add
any one course, if required.
#Page 3
“Wish list data”
Assume that admin has already collected wish list from SCOPE students for the upcoming
Semester, which needs to be uploaded in the portal. If any course has less than 10 wishes, it
should be ignored. Parse and store in database this info as well as number of batches required.
Capacity for each batch is 70 students.
#Page 4
“Faculty info”
Upload Faculty details in an excel sheet, which needs to be parsed and stored in the database.
Provide option in the portal for admin to add any one faculty, if required.
#Page 5
“View Faculty preferences”
Admin confirms whether all faculty submitted their preferences and views the same in the
portal. Display pending faculty and filled in faculty list, column wise along with respective
email ids. Provide send email option to the pending faculties to remind them to submit the
preference immediately.
#Page 6
“Allocation”
Once confirmed that all faculties submitted their preferences, based on the below conditions,
automate the process and allocate two/three courses to each faculty, based on their
Designation, empid.
In Faculty login, expected functionalities are as follows
#Page 1
“Course Preferences”- Once Admin uploads “Students’ Wish list data” in Admin Page 3, faculty gets to view the
course list and provide five preferences.Once preference list is submitted by the faculty, immediately pop up the preferred courses,
and store the choices in the database.
#Page 2
“Allocated Courses”- Display, “Yet to allocate, kindly wait” message. Once allocation done and admin approves the
same, two courses should be displayed in this page to the respective faculty
