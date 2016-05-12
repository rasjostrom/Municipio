<?php $mainSite = \Intranet\Helper\Multisite::getMainSiteBloginfo(); ?>

<div class="creamy creamy-border-bottom">
    <div class="container">
        <div class="grid gutter gutter-lg gutter-vertical">
            <div class="grid-md-6">
                <div class="network">
                    <button class="current-network network-title" data-dropdown=".dropdown">
                        {{ get_bloginfo() }}
                    </button>
                    <div class="dropdown">
                        <form class="network-search" method="get" action="/">
                            <label for="searchkeyword-0" class="sr-only">{{ get_field('search_label_text', 'option') ? get_field('search_label_text', 'option') : __('Search', 'municipio') }}</label>

                            <div class="input-group">
                                <input id="searchkeyword-0" autocomplete="off" class="form-control" type="search" name="s" placeholder="{{ get_field('search_placeholder_text', 'option') ? get_field('search_placeholder_text', 'option') : 'Search networks…' }}" value="<?php echo (isset($_GET['s']) && strlen($_GET['s']) > 0) ? urldecode(stripslashes($_GET['s'])) : ''; ?>">
                                <span class="input-group-addon-btn">
                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>

                        <div class="network-search-results">
                            <ul>
                                <li><a href="{{ $mainSite['path'] }}">{{ $mainSite['name'] }}</a></li>

                                <li class="title"><?php _e('Networks you are following', 'municipio-intranet'); ?></li>
                                @foreach (\Intranet\Helper\Multisite::getSitesList(false) as $site)
                                <li class="network-title"><a href="{{ $site['path'] }}">{{ $site['name'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <a href="#" class="show-all"><span class="link-item"><?php _e('Show all networks', 'municipio-intranet'); ?></span></a>
                    </div>
                </div>
            </div>

            <div class="grid-md-6 text-right">
                <button class="btn btn-primary" data-subscribe="{{ get_current_blog_id() }}">
                    @if (!\Intranet\User\Subscription::hasSubscribed(get_current_blog_id()))
                    <i class="fa fa-plus-circle"></i> <?php _e('Subscribe', 'municipio-intranet'); ?>
                    @else
                    <i class="fa fa-minus-circle"></i> <?php _e('Unsubscribe', 'municipio-intranet'); ?>
                    @endif
                </button>
            </div>
        </div>
    </div>
</div>