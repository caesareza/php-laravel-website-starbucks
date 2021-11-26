<x-layout>
    <x-slot name="title">About Our Company</x-slot>
    <section class="container-about">
        <h1>Let's talk coffee</h1>
        <p>Whether you're searching for something new to warm your mug, seeking the best brew method for your favorite
            blend or exploring our rarest offerings, you’ve come to the right place.</p>
        <figure>
            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/coffee/coffee-1.webp') }}"
                 alt="our company picture"/>
        </figure>
        <h2>Find your favorite at-home coffee</h2>
        <p>From K-Cup® Pods to Starbucks VIA® packets to our packaged coffee, we’ve compiled a wide selection of blends
            and beans to fill your cup.</p>
        <nav>
            <a href="#" class="solid">Browse our coffees</a>
        </nav>

        <p>Still undecided? Our coffee masters have created a simple three-question quiz to help you find a Starbucks®
            coffee you’re sure to love. Take our coffee quiz</p>

        <figure>
            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/coffee/coffee-2.webp') }}"
                 alt="our company picture"/>
        </figure>
        <h2>The rarest, most extraordinary coffees Starbucks has to offer</h2>
        <p>Exceptional coffees from around the world. Sourced for the season, roasted at Starbucks Reserve® Roasteries
            and crafted with care.</p>
        <nav>
            <a href="#">Explore Starbucks Reserve</a>
        </nav>

        <figure>
            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/coffee/coffee-3.webp') }}"
                 alt="our company picture"/>
        </figure>
        <h2>WHow to brew</h2>
        <p>Whether you’re a coffee novice or a seasoned pro, we have all the tools you need to bring your brewing game
            to the next level.</p>

        <h3>People</h3>
        <p>Our aspiration is to be people positive – investing in humanity and the well-being of everyone we connect
            with, from our partners to coffee farmers to the customers in our stores and beyond.</p>
        <nav>
            <a href="#">learn to brew your perfect cup</a>
        </nav>

        <div class="note">
            <p>Starbucks and the Starbucks logo are registered trademarks of Starbucks Corporation used under license by Nestlé.</p>
            <p>Keurig, K-Cup, and the Keurig trade dress are trademarks of Keurig Green Mountain, Inc., used with permission. Pike Place is a trademark of The Pike Place Market PDA, used under license.</p>
        </div>
    </section>
</x-layout>
