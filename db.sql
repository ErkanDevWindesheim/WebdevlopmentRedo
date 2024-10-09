
-- Database opdracht

-- table Posts:
--     - postid ------> Int NOT NULL AUTO_INCREMENT 
--     - title -------> VAR_CHAR(32)
--     - content -----> Text(32)
--     - author ------> VAR_CHAR(32) 
--     - created_at --> DATE 
--     - updated_at --> DATE DEFAULT '08/10/2024'
--     - PRIMARY KEY (postid)


CREATE TABLE Posts (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    author VARCHAR(32),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

CREATE TABLE Comments (
    id INT NOT NULL AUTO_INCREMENT,
    post_id INT,
    bericht TEXT,
    author VARCHAR(32),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (post_id) REFERENCES Posts(id)
);

