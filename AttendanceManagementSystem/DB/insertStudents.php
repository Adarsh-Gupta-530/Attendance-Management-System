<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "AttendanceManagementSystem";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// add Students in CSE 4rt SEM ---->>>> CSE --->>>> C04
// $sql = "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C04003', 'Aarav Dubey', 'CSE','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C04004', 'Ayan Sharma', 'CSE','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C04005', 'Arush Gupta', 'CSE','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C04006', 'Aatharv Sinha', 'CSE','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C04007', 'Ishaan Dubey', 'CSE','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C04008', 'Komal Chaturvedy', 'CSE','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C04009', 'Arjun Chaturvedy', 'CSE','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C04010', 'Aman Kamble', 'CSE','4')";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C04002', 'Akhilesh Gupta', 'CSE','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C04003', 'Ayush Singh', 'CSE','2');";
// $sql = "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C04004', 'Ankit khair', 'CSE','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C04005', 'Hitesh daa', 'CSE','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C04006', 'Nimesh Rana', 'CSE','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C04007', 'Neetesh Trivedy', 'CSE','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C04008', 'Kishan Sahu', 'CSE','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C04009', 'Aniket Kesarvani', 'CSE','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C04010', 'Sanyukta Sinha', 'CSE','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M01001', 'Adhya Gupta', 'MMS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M01002', 'Amar Soni', 'MMS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M01003', 'Ayush Gupta', 'MMS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M01004', 'Shivanshu Dubey', 'MMS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M01005', 'Anshuman Jaiswal', 'MMS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M01006', 'Neelesh Khanna', 'MMS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M01007', 'Rajveer Deval', 'MMS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M01008', 'Saurabh Mishra', 'MMS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M01009', 'Rohit Panday', 'MMS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M01010', 'Shiva Jha', 'MMS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M01001', 'Arpit Gupta', 'MMS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M01002', 'Akshat Soni', 'MMS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M01003', 'Annanya Gupta', 'MMS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M01004', 'Naman Dubey', 'MMS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M01005', 'Pratima Jaiswal', 'MMS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M01006', 'Pari Khanna', 'MMS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M01007', 'Ranveer Deval', 'MMS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M01008', 'Ritika Mishra', 'MMS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M01009', 'Reet Panday', 'MMS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M01010', 'Rakesh Jha', 'MMS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M01001', 'Abhav Gupta', 'MMS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M01002', 'Annu Saket', 'MMS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M01003', 'Aditi Payashi', 'MMS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M01004', 'Naman Mishra', 'MMS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M01005', 'Deependra Maravi', 'MMS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M01006', 'Deepali Mishra', 'MMS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M01007', 'Sunny Shukla', 'MMS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M01008', 'Kartikey Mishra', 'MMS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M01009', 'Kusum Panday', 'MMS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M01010', 'Nayan Jha', 'MMS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029E03001', 'Adhya Singh', 'ELEC','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029E03002', 'Akash Singh', 'ELEC','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029E03003', 'Ayush Gupta', 'ELEC','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029E03004', 'Shivam Dubey', 'ELEC','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029E03005', 'Anshuman Jaiswal', 'ELEC','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029E03006', 'Neel Khan', 'ELEC','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029E03007', 'Rajveer Deval', 'ELEC','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029E03008', 'Surabhi Mishra', 'ELEC','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029E03009', 'Rohit Panday', 'ELEC','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029E03010', 'Shiva Jhariya', 'ELEC','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029E03001', 'Arpita Gupta', 'ELEC','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029E03002', 'Akshat Singh', 'ELEC','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029E03003', 'Annu Gupta', 'ELEC','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029E03004', 'Nirmala Singhal', 'ELEC','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029E03005', 'Preet Jaisingh', 'ELEC','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029E03006', 'Pratima Khanna', 'ELEC','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029E03007', 'Ranu Mondal', 'ELEC','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029E03008', 'Ritika Mishra', 'ELEC','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029E03009', 'Deepika Mishra', 'ELEC','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029E03010', 'Rekha malhotra', 'ELEC','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029E03001', 'Arpit Kol', 'ELEC','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029E03002', 'Akshita Singh', 'ELEC','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029E03003', 'Anupam Sen', 'ELEC','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029E03004', 'Nirmala Singh', 'ELEC','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029E03005', 'Prem singh', 'ELEC','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029E03006', 'Prachi Khan', 'ELEC','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029E03007', 'Reetu Chaudhary', 'ELEC','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029E03008', 'Ritesh Mishra', 'ELEC','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029E03009', 'Deepik Gupta', 'ELEC','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029E03010', 'Rekesh malhotra', 'ELEC','2');";
 //mech -> M05 
// $sql. = "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M05001', 'Atharv Gupta', 'MECH','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M05002', 'Anamika Gupta', 'MECH','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M05003', 'Anupama Chaturvedy', 'MECH','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M05004', 'Neer Singh', 'MECH','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M05005', 'Prakash singh', 'MECH','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M05006', 'Ganesh Mishra', 'MECH','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M05007', 'Rishabh Dubey', 'MECH','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M05008', 'Ramesh Mishra', 'MECH','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M05009', 'Deepika Gupta', 'MECH','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M05010', 'Rekesh Shukla', 'MECH','6');";
// $sql = "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M05001', 'Anil Gupta', 'MECH','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M05002', 'Anu Gupta', 'MECH','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M05003', 'Adarsh Gupta', 'MECH','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M05004', 'Neeraj Singh', 'MECH','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M05005', 'Prakashita singh', 'MECH','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M05006', 'Ganesha Mishra', 'MECH','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M05007', 'Rishabh Shingh', 'MECH','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M05008', 'Reshma Mishra', 'MECH','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M05009', 'Deepik Gupta', 'MECH','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M05010', 'Raksh Shukla', 'MECH','4');";
// //2nd
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M05001', 'Anushka Gupta', 'MECH','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M05002', 'Annanya Gupta', 'MECH','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M05003', 'Anupam Mittal', 'MECH','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M05004', 'Neelesh Vishwakarma', 'MECH','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M05005', 'Prakash Chand Soni', 'MECH','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M05006', 'Khali Mishra', 'MECH','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M05007', 'Ritika Dubey', 'MECH','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M05008', 'Reyansh Mishra', 'MECH','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M05009', 'Suraj Gupta', 'MECH','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M05010', 'Himanshu Shukla', 'MECH','2')";

// //ms->03
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M03001', 'Anurupa Sinha', 'MS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M03002', 'Ankit Gupta', 'MS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M03003', 'Aditi Tiwari', 'MS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M03004', 'Shivam Gaharwar', 'MS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M03005', 'Poonam Panday', 'MS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M03006', 'Rekh Gupta', 'MS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M03007', 'Pari Dubey', 'MS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M03008', 'Pakhi Mishra', 'MS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M03009', 'Suraj Shukla', 'MS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029M03010', 'Seeta Shukla', 'MS','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M03001', 'Anurag Panday', 'MS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M03002', 'Akhil Soni', 'MS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M03003', 'Aditi Payashi', 'MS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M03004', 'Kanha Gaharwar', 'MS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M03005', 'Kartikey Panday', 'MS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M03006', 'Rimjhim Gupta', 'MS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M03007', 'Pakhi Dubey', 'MS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M03008', 'Srikant Mishra', 'MS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M03009', 'Shubham Shukla', 'MS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029M03010', 'Ram Tiwari', 'MS','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M03001', 'Akshat Tiwari', 'MS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M03002', 'Abhioshek Gupta', 'MS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M03003', 'Aditya Payashi', 'MS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M03004', 'Krishna Gupta', 'MS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M03005', 'Hari Panday', 'MS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M03006', 'Namrita Gupta', 'MS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M03007', 'Parimika Dubey', 'MS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M03008', 'Sarika Mishra', 'MS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M03009', 'Vandana Shukla', 'MS','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029M03010', 'Ramkumar Tiwari', 'MS','6');";

// //civil->C06
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C06001', 'Akash Shukla', 'CIVIL','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C06002', 'Ankita Gupta', 'CIVIL','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C06003', 'Aditya Tiwari', 'CIVIL','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C06004', 'Shiva Gill', 'CIVIL','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C06005', 'Poonam Yadav', 'CIVIL','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C06006', 'Roopali Gupta', 'CIVIL','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C06007', 'Deepali Dubey', 'CIVIL','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C06008', 'Sandhya Mishra', 'CIVIL','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C06009', 'Bisal Shukla', 'CIVIL','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('24029C06010', 'Seetal Shukla', 'CIVIL','2');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C06001', 'Akshita Panday', 'CIVIL','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C06002', 'Akhil Singh Baghel', 'CIVIL','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C06003', 'Suman Payashi', 'CIVIL','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C06004', 'Kokila Gaharwar', 'CIVIL','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C06005', 'Krashika Aswani', 'CIVIL','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C06006', 'Raj Gupta', 'CIVIL','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C06007', 'Pooravi Dubey', 'CIVIL','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C06008', 'Sivakant Mishra', 'CIVIL','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C06009', 'Sanyukta Shukla', 'CIVIL','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('23029C06010', 'Ramakant Tiwari', 'CIVIL','4');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029C06001', 'Amir Tiwari', 'CIVIL','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029C06002', 'Abhishek Gupta', 'CIVIL','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029C06003', 'Adit Panday', 'CIVIL','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029C06004', 'Gopal Gupta', 'CIVIL','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029C06005', 'Haridash Panday', 'CIVIL','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029C06006', 'Namrit Gupta', 'CIVIL','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029C06007', 'Priti Dubey', 'CIVIL','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029C06008', 'Kabir Singh', 'CIVIL','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029C06009', 'Harman Shukla', 'CIVIL','6');";
// $sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
// VALUES ('22029C06010', 'Raju Tiwari', 'CIVIL','6')";



if (mysqli_multi_query($conn, $sql)) {
  echo "New records CIVIL naye Inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
