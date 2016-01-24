<div class="news_list">
    <h1>Новости от <?=$name;?></h1>
    <?php foreach($news as $row): ?>

        <div class="news_item">
            <div class="title">
                <a href="?news_id=<?=$row['id']; ?>"><?=$row['title']; ?></a>
            </div>
            <div class="date">
                <?=$row['publish_date']; ?>
            </div>
            <div class="anounce">
                <?=$row['text']; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>