/**
 * Author:  Croitor Mihail <mcroitor@gmail.com>
 * Created: 19-Oct-2018
 */

CREATE TABLE config_tbl (
        variable_id INT NOT NULL AUTO_INCREMENT, 
        variable_name VARCHAR(255) NOT NULL,
        variable_value VARCHAR(255) NOT NULL,
        variable_type VARCHAR(255) NOT NULL,
        PRIMARY KEY(variable_id));

CREATE TABLE user_tbl (
        user_id INT NOT NULL AUTO_INCREMENT, 
        user_login VARCHAR(255) NOT NULL,
        user_password VARCHAR(255) NOT NULL,
        user_email VARCHAR(255) NOT NULL,
        PRIMARY KEY(user_id));

INSERT INTO user_tbl VALUES (NULL, 'admin', 'password', 'admin@localhost');

CREATE TABLE article_tbl (
        article_id INT NOT NULL AUTO_INCREMENT, 
        article_title VARCHAR(255) NOT NULL,
        article_body TEXT NOT NULL,
        article_published DATE NOT NULL,
        article_author_id INT NOT NULL,
        PRIMARY KEY(article_id));

INSERT INTO article_tbl VALUES (
    NULL, 
    'First article', 
    'The content of first article', 
    '2018-02-28',
    1
);
