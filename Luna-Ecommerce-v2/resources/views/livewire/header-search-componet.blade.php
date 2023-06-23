<form action="{{ route('product.search') }}">
    <div class="hero__search__categories">
        All Categories
        <span class="arrow_carrot-down"></span>
    </div>
    <input type="text" name="q" placeholder="What do yo u need?" value="{{ $q }}">
    <button type="submit" class="site-btn">SEARCH</button>
</form>