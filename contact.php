<?php 
/*
Template Name: Contact
*/
get_header(); ?>

<div class="contact">
    <h1><?php the_title(); ?></h1>
    <div class="contact__container">
        <div class="img__holder"
            style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/mirano-slider-2.jpg');">
        </div>
        <div class="contact__form">
            <form action="">
                <div>
                    <label for="form-name">Name</label>
                    <input type="text" name="name" id="form-name" placeholder="Type your name" />
                </div>
                <div>
                    <label for="form-mail">Email</label>
                    <input type="email" name="email" id="form-mail" placeholder="Type your email" />
                </div>
                <div>
                    <label for="form-select">Topic</label>
                    <select id="form-select" name="Choose an option">
                        <option value="volvo">Choose an option</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div>
                    <label for="form-msg">Your message</label>
                    <textarea name="message" name="message" id="form-msg"
                        placeholder="Enter your message..."></textarea>
                </div>
                <div>
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>