<?php 
    include'../component/sidebar.php';
    
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM movies WHERE id = '$id'") or die(mysqli_error($con));

    $fetch = mysqli_fetch_assoc($query);
    $name = $fetch['name'];
    $genre = $fetch['genre'];
    $release = $fetch['release'];
    $season = $fetch['season'];
    $synopsis = $fetch['synopsis'];
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="card-body">
    <h4>Edit Data</h4>
        <div class="card-body">
            <form method="POST", action="../process/editProcess.php?id=<?php echo $id; ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Movie Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $name?>">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" name="genre" id="genre" class="form-control" value="<?php echo $genre?>">
                </div>
                <div class="mb-3">
                    <label for="release" class="form-label">Release</label>
                    <input type="text" name="release" id="release" class="form-control" value="<?php echo $release?>">
                </div>
                <div class="mb-3">
                    <label for="season" class="form-label">Season</label>
                    <input type="text" name="season" id="season" class="form-control" value="<?php echo $season?>">
                </div>
                <div class="mb-3">
                    <label for="synopsis" class="form-label">Synopsis</label>
                    <textarea name="synopsis" id="synopsis" rows="2" class="form-control"><?php echo $synopsis?></textarea>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary" name="update">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>