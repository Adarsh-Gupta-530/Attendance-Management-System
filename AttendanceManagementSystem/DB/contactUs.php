CREATE TABLE contact_us 
( 
    sno INT AUTO_INCREMENT PRIMARY KEY, 
    first_name VARCHAR(100) NOT NULL, 
    last_name VARCHAR(100), 
    email VARCHAR(150) NOT NULL, 
    message TEXT, 
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);