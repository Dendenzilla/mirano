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
        <aside>
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
            <div class="contact__practical">
                <h4>Practical informations</h4>
                <p><a target="_blank" rel="noreferrer" referrerpolicy="no-referrer"
                        href="https://www.google.com/maps/place/Mirano+Brussels/@50.8494374,4.3692866,17z/data=!3m1!4b1!4m5!3m4!1s0x47c3c362d32f0aa7:0x37ee1bb65160d203!8m2!3d50.8494374!4d4.3714753">
                        Chaussée de Louvain 38, 1210 Saint Josse</a></p>
                <ul>
                    <li>Easilly accessible by foot/metro</li>
                    <li>Close to various major road networks</li>
                    <li>Parking is less than 2 minutes walk from the Mirano</li>
                    <li>Depending on the event, 30m of parking can also be reserved.</li>
                    <li>Security assured by SAFE-T FIRST - insured against damages by Generali Belgium. Policy number
                        GC046746.</li>
                </ul>
            </div>
        </aside>
    </div>
</div>

<?php get_footer(); ?>