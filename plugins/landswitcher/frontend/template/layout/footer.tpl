{block name="layout-footer" prepend}
    {inline_script}
        <script>
            console.log('this is inlined javascript from footer.tpl!');
        </script>
    {/inline_script}
    <div class="container">
        {* completly useless function call - just for demonstration purposes!*}
        {$test = get_html_translation_table()}
        {$test2 = JTL\Alert\Alert::TYPE_PRIMARY}
        <h3 class="text-center">Text aus Plugin <i>jtl_test</i> {lang key='xmlp_lang_var_2' section='jtl_test'}</h3>
        <p>{'Test modifier: '|addFoo}</p>
        {jtlTestBlock class="small"}Content within block{/jtlTestBlock}
    </div>
{/block}
