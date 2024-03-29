

<div class="cart-group-item" data-qty="0" data-styleid="1" data-groupid="1" <?=isset($load_more_group_id) ? "data-load-more-group='$load_more_group_id' style='display:none;'": ""; ?>>
    <button class="btn cart-group-item__delete delete">
            &times;
    </button>

    <div class="cart-group-item__body">
        <a class="cart-group-item__image cart-group-item__image--desktop" href="#">
            <picture class="cart-group-image">
                <source srcset="<?= base_site_url . '/image/search/' . $product['image'] ?>" media="(max-width: 480px)">
                <img src="<?= base_site_url . '/image/popular-items/' . $product['image'] ?>" alt="<?=$product['title']?>" loading="true">
            </picture>
        </a>
        <div class="cart-group-item__content">
            <div class="row">
                

                <div class="col-12 cart-group-item__col d-flex">
                    <a class="cart-group-item__title primary--text" href="#"><?= $product['title']; ?></a>
                </div>

                <div class="col-12 cart-group-item__col d-flex">
                    <div class="cart-group-item__color">
                        <div class="cart-group-color text-secondary">
                            <p class="font-weight-bold">Color: </p>
                            <div class="color-box" style="background: <?= $product['color']['hex'] ?>;">
                            </div>
                            <p><?= $product['color']['name'] ?></p>
                        </div>
                    </div>

                    <div class="cart-group-item__size">
                        <p class="cart-group-size text-secondary">
                            <span class="font-weight-bold">Size</span>
                            <span><?= $product['size']; ?></span>
                        </p>
                    </div>
                </div>


                <div class="d-flex col-12 cart-group-item__col">
                    <div class="cart-group-item__quantity">
                        <label class="label text-secondary" for="quantity">
                            <small>Quantity</small>
                        </label>

                        <div class="cart-group-quantity">

                            <div class="cart-group-quantity__body">
                                <button class="btn-quantity minus">
                                    -
                                </button>

                                <input class="input-quantity" type="number" name="quantity" id="quantity" value="<?= $product['quantity'] ?>" pattern="\d*" maxlength="6" min="0">

                                <button class="btn-quantity plus">
                                    +
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="cart-group-item__price">
                        <label class="label text-secondary" for="price">
                            <small>Price</small>
                        </label>
                        <div class="cart-group-price">
                            <?= '$' . $product['price']; ?>
                        </div>
                    </div>


                    <div class="cart-group-item__total">
                        <label class="label text-secondary" for="total">
                            <small>Total</small>
                        </label>
                        <div class="cart-group-total">
                            <?= '$' . $product['price'] * $product['quantity'] ?>
                        </div>
                    </div>


                </div>
            </div>




        </div>
    </div>


    <div class="cart-group-item__footer">
        <div class="alert cart-group-error">
            This item is excluded from bulk discount
        </div>
    </div>

</div>