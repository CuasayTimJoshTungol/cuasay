<?php foreach ($product as $products): ?>
    <div>
        <div>
            <div>
            <img class="img-fluid" style="width: 350px; height: 400px;" src="<?= base_url($products['productImage']) ?>" alt="">
                <div>
                    <h4><?=$products['productName'] ?></h4>
                    <p><?=$products['productDescription'] ?></p>
                    <h4><?='P' . $products['productPrice'] ?><h4>
                </div>


</div>

            </div>
        </div>
    </div>
<?php endforeach; ?>