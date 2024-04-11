<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Deliveries Model
 *
 * @property \App\Model\Table\OrdersTable&\Cake\ORM\Association\BelongsTo $Orders
 * @property \App\Model\Table\StaffsTable&\Cake\ORM\Association\BelongsTo $Staffs
 *
 * @method \App\Model\Entity\Delivery newEmptyEntity()
 * @method \App\Model\Entity\Delivery newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Delivery> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Delivery get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Delivery findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Delivery patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Delivery> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Delivery|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Delivery saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Delivery>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Delivery>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Delivery>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Delivery> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Delivery>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Delivery>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Delivery>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Delivery> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DeliveriesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('deliveries');
        $this->setDisplayField('suburb');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Staffs', [
            'foreignKey' => 'staff_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('suburb')
            ->maxLength('suburb', 128)
            ->requirePresence('suburb', 'create')
            ->notEmptyString('suburb');

        $validator
            ->scalar('state')
            ->maxLength('state', 3)
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->scalar('postcode')
            ->maxLength('postcode', 4)
            ->requirePresence('postcode', 'create')
            ->notEmptyString('postcode');

        $validator
            ->decimal('fee')
            ->requirePresence('fee', 'create')
            ->notEmptyString('fee');

        $validator
            ->uuid('order_id')
            ->notEmptyString('order_id');

        $validator
            ->uuid('staff_id')
            ->notEmptyString('staff_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['order_id'], 'Orders'), ['errorField' => 'order_id']);
        $rules->add($rules->existsIn(['staff_id'], 'Staffs'), ['errorField' => 'staff_id']);

        return $rules;
    }
}
