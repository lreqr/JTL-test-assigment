<div class="jtl_test_test_cases">
    <div class="jtl_test_stuff" id="db_text">
        <p class="text">Text loaded from DB: {$some_text}</p>
    </div>

    <form class="form" id="jtl-test-form" method="post">
        {$jtl_token}
        <p class="input-group">
            <span class="input-group-addon">
                <label for="jtl-test-input-1">Eine Zahl</label>
            </span>
            <input id="jtl-test-input-1" class="form-control" type="number" name="jtl-number" placeholder="Nummer" required />
        </p>
        <p class="input-group">
            <span class="input-group-addon">
                <label for="jtl-test-input-2">0 oder 1</label>
            </span>
            <input id="jtl-test-input-2" class="form-control" type="number" name="jtl-number-two" placeholder="Nummer 2" min="0" max="1" required />
        </p>
        <p class="input-group">
            <span class="input-group-addon">
                <label for="jtl-test-input-3">Ein Text</label>
            </span>
            <input id="jtl-test-input-3" class="form-control" type="text" name="jtl-text" placeholder="Text" required />
        </p>
        <p>
            <button class="btn btn-primary" type="submit" name="jtl-test-post" value="1"><i class="fa fa-save"></i> Speichern</button>
        </p>
        {if !empty($jtlExmpleSuccess)}
            <p class="alert alert-success">{$jtlExmpleSuccess}</p>
        {elseif !empty($jtlExmpleError)}
            <p class="alert alert-danger">{$jtlExmpleError}</p>
        {/if}
    </form>
</div>
