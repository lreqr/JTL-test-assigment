<textarea
    class="form-control {$params.class->getValue()}"
    {if $params.title->hasValue()} title="{$params.title->getValue()}"{/if}
    {if $params.placeholder->hasValue()}placeholder="{$params.placeholder->getValue()}"{/if}
    {if $params.rows->hasValue()}rows="{$params.rows->getValue()}"{/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.disabled->getValue() === true}disabled{/if}
    {if $params.name->hasValue()}name="{$params.name->getValue()}"{/if}
    {if $params.required->getValue() === true} required{/if}
    {if $params.readonly->getValue() === true} readonly{/if}
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
    {if $params.role->hasValue()}role="{$params.role->getValue()}"{/if}
    {if $params.aria->hasValue()}{foreach $params.aria->getValue() as $ariaKey => $ariaVal}aria-{$ariaKey}="{$ariaVal}" {/foreach}{/if}
    {if $params.data->hasValue()}{foreach $params.data->getValue() as $dataKey => $dataVal}data-{$dataKey}="{$dataVal}" {/foreach}{/if}
    {if $params.attribs->hasValue()}
        {foreach $params.attribs->getValue() as $key => $val} {$key}="{$val}" {/foreach}
    {/if}
>{trim($blockContent)}</textarea>
