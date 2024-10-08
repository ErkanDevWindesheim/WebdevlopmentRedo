-- table Posts:
--     - postid ------> Int NOT NULL AUTO_INCREMENT 
--     - title -------> VAR_CHAR(32)
--     - content -----> Text(32)
--     - author ------> VAR_CHAR(32) 
--     - created_at --> DATE 
--     - updated_at --> DATE DEFAULT '08/10/2024'
--     - PRIMARY KEY (postid)


CREATE TABLE Posts (
    postid INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    author VARCHAR(32),
    created_at DATETIME DEFAULT current_timestamp,
    updated_at DATE DEFAULT current_timestamp on update current_timestamp,
    PRIMARY KEY (postid)
);


INSERT INTO posts (title, content, author)
VALUES ('Dedddddddddddddddjn goed  ccccc', 'bla dddddddddddddddd', 'dddddd');

CREATE TABLE Comments (
    commentid INT NOT NULL AUTO_INCREMENT,
    bericht TEXT,
    author VAR_CHAR(32),
)