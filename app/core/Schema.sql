-- /config/schema.sql

-- Drop tables if they already exist
DROP TABLE IF EXISTS senschool.users;
DROP TABLE IF EXISTS senschool.files;
DROP TABLE IF EXISTS senschool.tags;
DROP TABLE IF EXISTS senschool.resource_tags;
DROP TABLE IF EXISTS senschool.levels;
DROP TABLE IF EXISTS senschool.sub_levels;
DROP TABLE IF EXISTS senschool.courses;
DROP TABLE IF EXISTS senschool.chapters;
DROP TABLE IF EXISTS senschool.modules;


-- Create 'users' table
CREATE TABLE senschool.users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    user_role ENUM('Admin', 'Teacher', 'Student') DEFAULT 'Student',
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    profile_image VARCHAR(255),
    registration_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    last_login DATETIME DEFAULT CURRENT_TIMESTAMP,
    is_active BOOLEAN DEFAULT TRUE
);


-- Create 'resources' table
CREATE TABLE senschool.files (
    file_id INT AUTO_INCREMENT PRIMARY KEY,
    file_name VARCHAR(100) NOT NULL,
    title VARCHAR(100) NOT NULL,
    typ VARCHAR(50) NOT NULL,
    descript TEXT,
    author VARCHAR(255),
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(user_id)
);

-- Create 'tags' table
CREATE TABLE senschool.tags (
    tag_id INT AUTO_INCREMENT PRIMARY KEY,
    tag VARCHAR(50) NOT NULL UNIQUE
);

-- Create 'resource_tags' table (many-to-many relationship)
CREATE TABLE senschool.file_tags (
    file_id INT,
    tag_id INT,
    PRIMARY KEY (file_id, tag_id),
    FOREIGN KEY (file_id) REFERENCES files(file_id),
    FOREIGN KEY (tag_id) REFERENCES tags(tag_id)
);

-- Create a table that contain the different levels of study as well as the domain study
CREATE TABLE senschool.levels (
    level_id INT AUTO_INCREMENT PRIMARY KEY,
    level_name VARCHAR(100),
    icon_name VARCHAR(100),
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(user_id) 
);

-- Create a table that contain the sublevels that corresponds to the years in each level
CREATE TABLE senschool.sub_levels(
    sub_level_id INT AUTO_INCREMENT PRIMARY KEY,
    sub_level_name VARCHAR(100),
    level_id INT,
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (level_id) REFERENCES levels(level_id),
    FOREIGN KEY (created_by) REFERENCES users(user_id)
);

-- Create a TABLE courses 
CREATE TABLE senschool.courses(
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255),
    sub_level_id INT,
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (sub_level_id) REFERENCES sub_levels(sub_level_id),
    FOREIGN KEY (created_by) REFERENCES users(user_id)
);


-- Create a TABLE chapters
CREATE TABLE senschool.chapters(
    chapter_id INT AUTO_INCREMENT PRIMARY KEY,
    chapter_name VARCHAR(255),
    course_id INT,
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (course_id) REFERENCES courses(course_id),
    FOREIGN KEY (created_by) REFERENCES users(user_id)
);

-- Create a TABLE modules
CREATE TABLE senschool.modules(
    module_id INT AUTO_INCREMENT PRIMARY KEY,
    module_name VARCHAR(255),
    sub_level_id INT,
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (sub_level_id) REFERENCES sub_levels(sub_level_id),
    FOREIGN KEY (created_by) REFERENCES users(user_id)
);