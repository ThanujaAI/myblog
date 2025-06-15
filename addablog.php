<?php include 'header.php'; ?>

<div class="container">
    <h1>Add a New Blog Post</h1>
    
    <form action="process_post.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Sri Lanka:</label>
            <input type="text" id="title" name="title" required>
        </div>
        
        <div class="form-group">
            <label for="content">Post Content:</label>
            <textarea id="content" name="content" rows="10" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="image">Featured Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        
        <div class="form-group">
            <label for="author">Thanuja Dhananjani:</label>
            <input type="text" id="author" name="author" required>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date "required>
        </div>

        
        <button type="submit" class="submit-btn">Publish Post</button>
    </form>
</div>

<?php include 'footer.php'; ?>