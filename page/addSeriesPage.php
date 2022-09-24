<?php
include '../component/sidebar.php'
?>
    
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <div class="card-body">
    <h4>ADD SERIES</h4>
    
    <div class="card-body">
            <form action="../process/addSeriesProcess.php" method="post">
                <div class="mb-3 col">
                    <label for="name" class="form-label">Series Name</label>
                    <input type="text" id="addSeriesName" class="form-control" name="addSeriesName">
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <select class="form-control" id="addGenre" name="addGenre[]" size="3" multiple="multiple">
                        <option value="Comedy">Comedy</option>
                        <option value="Action">Action</option>
                        <option value="Horror">Horror</option>
                        <option value="Historical">Historical</option>
                        <option value="Family">Family</option>
                        <option value="Adventure">Adventure</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="release" class="form-label">Release</label>
                    <input type="text" id="addRelease" class="form-control" name="addRelease">
                </div>
                
                <div class="mb-3">
                    <label for="episode" class="form-label">Episode</label>
                    <input type="text" id="addEpisode" class="form-control" name="addEpisode">
                </div>

                <div class="mb-3">
                    <label for="season" class="form-label">Season</label>
                    <input type="text" id="addSeason" class="form-control" name="addSeason">
                </div>

                <div class="mb-3">
                    <label for="synopsis" class="form-label">Synopsis</label>
                    <textarea  id="addSynopsis" class="form-control" name="addSynopsis"></textarea>
                </div>

                <div class="mt-2">
                    <button class="btn btn-primary" type="submit" name="addSeries">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>

</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</body>
</html>