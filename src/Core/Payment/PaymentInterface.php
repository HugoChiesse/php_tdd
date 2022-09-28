<?php

namespace Core\Payment;

interface PaymentInterface
{
    public function createPlan(array $data): bool;
    public function findClientById(int $id): ?object;
    public function makePayment(array $data): bool;
}
