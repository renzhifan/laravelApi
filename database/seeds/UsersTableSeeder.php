<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 生成数据集合
        $users = factory(User::class)
            ->times(2)
            ->make();

        // 让隐藏字段可见，并将数据集合转换为数组
        $user_array = $users->makeVisible(['password', 'remember_token'])->toArray();

        // 插入到数据库中
        User::insert($user_array);

        // 初始化用户角色，将 1 号用户指派为『站长』
        $user = User::find(1);
        $user->name='admin';
        $user->token='P1Ggh4oeKGiovvhFxytTNJpzjn8g12CZ1VP';
        $user->save();

        // 将 2 号用户指派为『管理员』
        $user = User::find(2);
        $user->name='test';
        $user->token='P1Hypyfw9Swb3k8dqDBhJMUwxCLtxrD25Np';
        $user->save();
    }
}
