<center>
        <br><br>
<h3><legend><?php echo $title; ?></legend></h3>
</center>
<?php foreach ($news as $news_item): ?>
        <hr>
       
        <p>Titulo:    <?php echo $news_item['title']; ?></p>
        
        <p>Descripcion:  <?php echo $news_item['text']; ?></p>
        
        <p>Autor:  <?php echo $news_item['autor']; ?></p>
        
        <p>Fecha:   <?php echo $news_item['fecha']; ?></p>
        
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">Link</a></p>

        <hr>

<?php endforeach; ?>