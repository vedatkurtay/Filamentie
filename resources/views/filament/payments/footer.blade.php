<td colspan="5" class="px-4 py-3 filament-tables-text-column">
    Total
</td>
<td class="px-4 py-3 filament-tables-text-column">
    <div>
        {{ money($this->getTableRecords()->sum('subtotal'))}}
    </div>
</td>
<td class="px-4 py-3 filament-tables-text-column">
    <div>
        {{ money($this->getTableRecords()->sum('taxes'))}}
    </div>
</td>
<td class="px-4 py-3 filament-tables-text-column">
    <div>
        {{ money($this->getTableRecords()->sum('total'))}}
    </div>
</td>
