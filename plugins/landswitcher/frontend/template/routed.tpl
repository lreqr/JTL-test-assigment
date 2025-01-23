<div class="container">
    <h4>Routed!</h4>
    {if $model !== null}
        {card header=$model->getName() class="mb-3"}
        <p>{$model->getDescription()}</p>
        {/card}
    {/if}
    <div class="row">
        <div class="col-4">
        {listgroup class="model-list"}
            {foreach $models as $model}
                {listgroupitem class="list-group-item d-flex justify-content-between align-items-center model-list-item"}
                    <p><a href="{$model->getUrl()}">{$model->getName()}</a></p>
                    <span class="badge badge-primary badge-pill">{$model->getId()}</span>
                {/listgroupitem}
            {/foreach}
        {/listgroup}
        </div>
    </div>
</div>
