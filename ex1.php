<?php
//connect to MySQL
$db = mysqli_connect('localhost', 'root', 'root') or die ('Unable to connect. Check your connection parameters.');
// make sure you're using the right database
mysqli_select_db($db,'moviesite') or die(mysql_error($db));

//insert new data into the reviews table
$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    (2, "2018-09-23", "Jurgen Kloop", "I thought this was a great movie
        Even though my girlfriend made me see it against my will.", 5),
    (2, "2018-10-03", "Mesut Ozil", "I liked Eraserhead better.", 4),
    (2, "2019-07-21", "Mario Gotze", "I liked this movie, even though I
        Thought it was an informational video from my travel agent.", 3)
ENDSQL;
mysqli_query($db, $query) or die(mysqli_error($db));

echo 'Movie database successfully updated!';


?>