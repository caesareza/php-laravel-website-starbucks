<x-layout>
    <x-slot name="title">Starbucks Coffee Company</x-slot>
    <section class="home">
        <div class="content-home hijau">
            <div class="content-home-atas">
                Following CDC guidance, facial coverings are recommended in our stores for all customers, <br />
                and are required where mandated by local law. Learn more
            </div>
        </div>

        <div class="content-home hijau">
            <div class="tahun50">
                <div class="list">
                    <div class="foto">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/home-1.webp') }}" alt="home 1" />
                    </div>
                </div>
                <div class="list">
                    <div class="desc">
                        <h1>50 YEARS, TOGETHER</h1>
                        <p>Since 1971, you’ve helped us see what’s possible. Every cup, every conversation, every day. Cheers to you.</p>
                        <button>Explore</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-home hijau-2 font-putih">
            <div class="tahun50">
                <div class="list">
                    <div class="desc">
                        <h2>50 YEARS, TOGETHER</h2>
                        <p>Since 1971, you’ve helped us see what’s possible. Every cup, every conversation, every day. Cheers to you.</p>
                        <button class="btn-putih">Explore</button>
                    </div>
                </div>
                <div class="list">
                    <div class="foto">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/home-2.webp') }}" alt="home 2" />
                    </div>
                </div>
            </div>
        </div>

        <div class="content-home hijau">
            <div class="tahun50">
                <div class="list">
                    <div class="foto">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/home-3.webp') }}" alt="home 3" />
                    </div>
                </div>
                <div class="list">
                    <div class="desc">
                        <h2>Estamos unidos—We are united</h2>
                        <p>This Latinx Heritage Month, learn about the many ways our Latinx partners (employees) embrace their cultures. See how we are united in our diversity.</p>
                        <button>Find out more</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-home coklat">
            <div class="tahun50">
                <div class="list">
                    <div class="desc">
                        <h2>NEW DAY YOUR WAY</h2>
                        <p>Nitro Cold Brew: cold brew infused with nitrogen for a coffee with cascading, velvety crema. For a creamy twist, try it with Vanilla Sweet Cream.</p>
                        <button>Order now</button>
                    </div>
                </div>
                <div class="list">
                    <div class="foto">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/home-4.png') }}" alt="home 4" />
                    </div>
                </div>
            </div>
        </div>

        <div class="content-home">
            <div class="tahun50">
                <div class="list">
                    <div class="reward left hijau">
                        <div class="foto">
                            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/home-5.jpg') }}" alt="home 5" />
                        </div>
                        <h3>Earning 4,500 Bonus Stars is Super Starifying</h3>
                        <p>With a $0 intro annual fee for your first year, earn more Stars and even more Rewards with the Starbucks® Rewards Visa® Card.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
                <div class="list">
                    <div class="reward right hijau">
                        <div class="foto">
                            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/home-6.webp') }}" alt="home 6" />
                        </div>
                        <h3>Fall into an easier routine</h3>
                        <p>Get your favorites, your way—order, pay and pick up with the app.</p>
                        <a href="#">See pickup options</a>
                    </div>
                </div>
            </div>
            <div class="note">
                *NO PURCHASE NECESSARY. Participating stores only. Ends 10/24/21. To play and for Official Rules, <br />
                visit starbucksrewardsstarland.com. Entrants can receive a maximum of 2 plays per day.
            </div>
        </div>
    </section>
</x-layout>
