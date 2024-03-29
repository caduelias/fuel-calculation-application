<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\HistoricoEntity;

interface HistoricoInterfaceRepository
{
    public function insert(HistoricoEntity $entity);
    public function getAll(): array;
    public function getAllByCombustivel(int $idCombustivel): array;
    public function getByCombustivel(int $idCombustivel): HistoricoEntity;
    public function getByData(int $idCombustivel, string $datainicial, string $datafinal): ?array;
} 