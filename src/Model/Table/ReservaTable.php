<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reserva Model
 *
 * @property \App\Model\Table\ClienteTable&\Cake\ORM\Association\BelongsTo $Cliente
 * @property \App\Model\Table\QuartoTable&\Cake\ORM\Association\BelongsTo $Quarto
 * @property \App\Model\Table\FuncionarioTable&\Cake\ORM\Association\BelongsTo $Funcionario
 * @property \App\Model\Table\HospedagemTable&\Cake\ORM\Association\HasMany $Hospedagem
 *
 * @method \App\Model\Entity\Reserva newEmptyEntity()
 * @method \App\Model\Entity\Reserva newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Reserva> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reserva get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Reserva findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Reserva patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Reserva> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reserva|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Reserva saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Reserva>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reserva>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Reserva>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reserva> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Reserva>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reserva>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Reserva>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reserva> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ReservaTable extends Table
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

        $this->setTable('reserva');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cliente', [
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Quarto', [
            'foreignKey' => 'quarto_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Funcionario', [
            'foreignKey' => 'funcionario_id',
        ]);
        $this->hasMany('Hospedagem', [
            'foreignKey' => 'reserva_id',
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
            ->integer('cliente_id')
            ->notEmptyString('cliente_id');

        $validator
            ->integer('quarto_id')
            ->notEmptyString('quarto_id');

        $validator
            ->dateTime('Data_reserva')
            ->requirePresence('Data_reserva', 'create')
            ->notEmptyDateTime('Data_reserva');

        $validator
            ->dateTime('Data_entrada')
            ->requirePresence('Data_entrada', 'create')
            ->notEmptyDateTime('Data_entrada');

        $validator
            ->dateTime('Data_saida')
            ->requirePresence('Data_saida', 'create')
            ->notEmptyDateTime('Data_saida');

        $validator
            ->integer('Pessoas')
            ->requirePresence('Pessoas', 'create')
            ->notEmptyString('Pessoas');

        $validator
            ->integer('Criancas')
            ->allowEmptyString('Criancas');

        $validator
            ->decimal('Valor_reserva')
            ->requirePresence('Valor_reserva', 'create')
            ->notEmptyString('Valor_reserva');

        $validator
            ->integer('funcionario_id')
            ->allowEmptyString('funcionario_id');

        $validator
            ->boolean('Status_reservas')
            ->requirePresence('Status_reservas', 'create')
            ->notEmptyString('Status_reservas');

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
        $rules->add($rules->existsIn(['cliente_id'], 'Cliente'), ['errorField' => 'cliente_id']);
        $rules->add($rules->existsIn(['quarto_id'], 'Quarto'), ['errorField' => 'quarto_id']);
        $rules->add($rules->existsIn(['funcionario_id'], 'Funcionario'), ['errorField' => 'funcionario_id']);

        return $rules;
    }
}
