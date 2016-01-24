
<?php foreach($news as $row): ?>
    <h1><?=$row['title']; ?></h1>
    <div class="date">
        <?=$row['publish_date'];?>, автор &mdash;
        <a href="?author_id=<?=$row['author_id'];?>"><?=$row['name'];?></a>
    </div>
    <div class="text">
         <p><?=$row['text'];?></p>
    </div>
<?php endforeach; ?>