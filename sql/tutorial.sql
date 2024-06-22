CREATE TABLE users (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(200),
    Email VARCHAR(200),
    date DATE,
    Password VARCHAR(200),
    Phonenumber VARCHAR(20),
    Gender ENUM('male', 'female'),
    Country VARCHAR(100),
    Notes TEXT,
    ProfileImage VARCHAR(255)
);  
CREATE TABLE chat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);