<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:56:47
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\backend_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f91f6c3153_25156318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de08d79aedcaf16e94a02c6e42b6eaaed1c9ce4a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\backend_search.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f91f6c3153_25156318 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="backend-search row no-gutters align-items-center flex-nowrap">
    <div class="col-auto">
        <button type="button" class="btn btn-link px-2 ml-n2 search-icon">
            <span class="fal fa-search fa-fw" data-fa-transform="grow-4"></span>
        </button>
    </div>
    <div class="col dropdown">
        <input id="backend-search-input" class="form-control border-0 pl-2" placeholder="<?php echo __('searchTerm');?>
" name="cSuche" type="search"
               value="" autocomplete="off">
        <div class="dropdown-menu" id="dropdown-search"></div>
    </div>
    <div class="col-auto search-btn">
        <button id="backend-search-submit" class="btn btn-primary"><span class="fal fa-search"></span></button>
    </div>
    <?php echo '<script'; ?>
>
        var lastIoSearchCall    = null;
        var searchItems         = null;
        var selectedSearchIndex = null;
        var selectedSearchItem  = null;
        var searchDropdown      = $('#dropdown-search');
        var searchInput         = $('#backend-search-input');
        var searchSubmit        = $('#backend-search-submit');
        var lastSearchTerm      = '';
        var searchInputTimeout  = null;

        searchSubmit.on('click', function () {
            window.location.href = '<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/searchresults?cSuche=' + searchInput.val();
        });

        searchInput
            .on('input', function() {
                lastSearchTerm = $(this).val();

                if (lastSearchTerm.length >= 3 || /^\d+$/.test(lastSearchTerm)) {
                    if(lastIoSearchCall) {
                        lastIoSearchCall.abort();
                        lastIoSearchCall = null;
                    }

                    if(searchInputTimeout) {
                        clearTimeout(searchInputTimeout);
                    }

                    searchInputTimeout = setTimeout(() => {
                        lastIoSearchCall = ioCall(
                            'adminSearch',
                            [lastSearchTerm],
                            function (html) {
                                if (html) {
                                    searchDropdown.html(html).addClass('show');
                                    $('a.dropdown-item').on('click', function () {
                                        window.location = $(this).attr('href');
                                    });
                                    $('.dropdown-item form').on('click', function () {
                                        $(this).submit();
                                    });
                                } else {
                                    searchDropdown.removeClass('show');
                                }

                                searchItems = null;
                                selectedSearchIndex = null;
                                selectedSearchItem = null;
                            },
                            undefined,
                            undefined,
                            true
                        );
                        searchInputTimeout = null;
                    }, 345);
                } else {
                    searchDropdown.html('');
                    searchDropdown.removeClass('show');
                    searchItems         = null;
                    selectedSearchIndex = null;
                    selectedSearchItem  = null;
                }
            })
            .on('keydown', function(e) {
                if(e.key === 'Enter') {
                    if(selectedSearchItem === null) {
                        window.location.href = '<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/searchresults?cSuche=' + searchInput.val();
                    } else {
                        if (selectedSearchItem.hasClass('is-form-submit')) {
                            selectedSearchItem.find('form').submit();
                        } else {
                            window.location.href = selectedSearchItem.attr('href');
                        }
                    }
                } else if(e.key === 'ArrowDown' || e.key === 'ArrowUp') {
                    arrowNavigate(e.key === 'ArrowDown');
                    e.preventDefault();
                }
            });
        searchDropdown.on('keydown', function (e) {
            if(e.key === 'ArrowDown' || e.key === 'ArrowUp') {
                arrowNavigate(e.key === 'ArrowDown');
                e.preventDefault();
            }
        });
        $(document).on('click', function(e) {
            if ($(e.target).closest('.backend-search').length === 0) {
                searchDropdown.removeClass('show');
            }
        });

        function arrowNavigate(down = false)
        {
            if(searchItems === null) {
                searchItems = searchDropdown.find('.dropdown-item');
            }

            if (searchItems.length > 0) {
                if(selectedSearchIndex === null) {
                    if(down) {
                        selectedSearchIndex = 0;
                    } else {
                        selectedSearchIndex = searchItems.length - 1;
                    }
                } else {
                    if(down) {
                        selectedSearchIndex = (selectedSearchIndex + 1) % searchItems.length;
                    } else {
                        selectedSearchIndex = (selectedSearchIndex - 1 + searchItems.length) % searchItems.length;
                        if(selectedSearchIndex === searchItems.length - 1) {
                            selectedSearchIndex = null;
                        }
                    }
                }

                searchDropdown.find('.selected').removeClass('selected');

                if (selectedSearchIndex === null) {
                    selectedSearchItem = null;
                    searchInput.val(lastSearchTerm);
                } else {
                    selectedSearchItem = $(searchItems[selectedSearchIndex]);
                    selectedSearchItem.addClass('selected');
                    selectedSearchItem.focus();
                    var mark = selectedSearchItem.find('mark');
                    if (mark.length > 0) {
                        searchInput.val(mark[0].innerText);
                    }
                }

                searchInput.focus();
            }
        }
    <?php echo '</script'; ?>
>
</div>
<?php }
}
