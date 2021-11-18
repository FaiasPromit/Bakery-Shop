<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->string('billing_email'); 
            $table->string('billing_name');
            $table->string('billing_city');
            $table->string('billing_phone');
            $table->string('billing_area');
            $table->string('billing_address');
            $table->unsignedBigInteger('billing_discount')->default(0);
            $table->string('billing_discount_code')->nullable();
            $table->string('billing_subtotal');
            $table->string('billing_tax');
            $table->string('billing_total');
            $table->boolean('shipped')->default(false);
            $table->string('error')->nullable(); 
            $table->timestamps();
        });

        foreach(Cart::content() as $item){
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity'=>$item->qty,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
