CREATE TABLE tweet
(   id INT PRIMARY KEY NOT NULL,
    id_user VARCHAR(100) NOT NULL,
    content VARCHAR(140) NOT NULL,
    love  INTEGER,
    retweet  INTEGER
)
