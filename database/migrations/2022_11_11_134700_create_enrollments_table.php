<?php

use App\Enums\EnrollmentStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string("number")->nullable()->unique();
            $table->json("lead_data")->nullable();
            $table->string("financing_type")->nullable();
            $table->string("course_start_date")->nullable();
            $table->string("cpf_amount")->nullable();
            $table->string("cpf_dossier_number")->nullable();
            $table->string("status")->default(EnrollmentStatus::Pending->value);
            $table->boolean("processed")->default(0);
            $table->timestamp('completed_at')->nullable();
            $table->json("signature_request_data")->nullable();
            $table->json("contract_files")->nullable();
            $table->string("payment_method")->nullable();
            $table->timestamp("paid_at")->nullable();
            $table->foreignId("completed_by_id")->nullable()->constrained("users")->onDelete("set null")->onUpdate("set null");
            $table->foreignId("canceled_by_id")->nullable()->constrained("users")->onDelete("set null")->onUpdate("set null");
            $table->foreignId("responsible_user_id")->nullable()->constrained("users")->onDelete("set null")->onUpdate("set null");
            $table->foreignId("course_id")->nullable()->constrained()->onDelete("set null")->onUpdate("set null");
            $table->foreignId("plan_id")->nullable()->constrained()->onDelete("set null")->onUpdate("set null");
            $table->foreignId("lead_id")->nullable()->constrained()->onDelete("set null")->onUpdate("set null");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
};
