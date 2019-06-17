<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuppliersInvoice extends Model
{
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function products()
    {
        return $this->hasMany(SuplliersInvoiceProduct::class, 'invoice_id');
    }

    public function type()
    {
        return $this->belongsTo(InvoicesType::class, 'type_id');
    }
}
