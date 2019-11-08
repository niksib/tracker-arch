<?php

namespace App\Controller;

use App\Service\Payment\Interfaces\PaymentServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{
    /**
     * Pay for some service
     * @Route("/payment/{userId}/pay", name="user_pay", methods={"POST"}, requirements={"userId"="\d+"})
     * @param int $userId
     * @param PaymentServiceInterface $paymentService
     * @return JsonResponse
     */
    public function pay(int $userId, PaymentServiceInterface $paymentService): JsonResponse
    {
        try {
            $paymentService->pay($userId);

            return $this->json([
                'message' => 'Payment successful'
            ]);
        } catch (\Exception $exception) {
            return $this->json([
                'message' => $exception->getMessage()
            ]);
        }
    }
}
