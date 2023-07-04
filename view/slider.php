    <!-- slider -->
    <div id=<?php echo "pds$id"; ?> class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="data:image/png;base64,<?php echo $img1; ?>" class="d-block w-100" />
            </div>
            <div class="carousel-item">
                <img src="data:image/png;base64,<?php echo $img2; ?>" class="d-block w-100" />
            </div>
            <div class="carousel-item">
                <img src="data:image/png;base64,<?php echo $img3; ?>" class="d-block w-100" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target=<?php echo "#pds$id"; ?> data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target=<?php echo "#pds$id"; ?> data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- slider -->