<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MethodController extends AbstractController
{
    #[Route('/method', name: 'app_method', methods: ['GET', 'POST', 'PUT', 'DELETE', 'PATCH'])]
    public function index(Request $request): Response
    {
        // Получение HTTP метода из объекта Request
        $method = $request->getMethod();
        
        // Дополнительная информация о запросе
        $additionalInfo = [
            'uri' => $request->getRequestUri(),
            'host' => $request->getHost(),
            'ip' => $request->getClientIp(),
            'user_agent' => $request->headers->get('User-Agent'),
        ];

        // Возврат ответа через объект Response
        $html = sprintf('
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>HTTP Method</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    max-width: 800px;
                    margin: 50px auto;
                    padding: 20px;
                    background-color: #f5f5f5;
                }
                .container {
                    background: white;
                    padding: 30px;
                    border-radius: 10px;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                }
                h1 {
                    color: #333;
                }
                .method {
                    font-size: 48px;
                    color: #2ecc71;
                    font-weight: bold;
                    text-align: center;
                    padding: 20px;
                    background: #ecf0f1;
                    border-radius: 5px;
                    margin: 20px 0;
                }
                .info {
                    margin-top: 30px;
                    padding: 20px;
                    background: #f8f9fa;
                    border-radius: 5px;
                }
                .info-row {
                    padding: 8px 0;
                    border-bottom: 1px solid #dee2e6;
                }
                .label {
                    font-weight: bold;
                    color: #495057;
                }
                .test-form {
                    margin-top: 30px;
                    padding: 20px;
                    background: #fff3cd;
                    border-radius: 5px;
                }
                button {
                    padding: 10px 20px;
                    margin: 5px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    font-size: 14px;
                }
                .btn-post { background: #28a745; color: white; }
                .btn-put { background: #ffc107; color: black; }
                .btn-delete { background: #dc3545; color: white; }
            </style>
        </head>
        <body>
            <div class="container">
                <h1>Информация о HTTP запросе</h1>
                
                <div class="method">%s</div>
                
                <div class="info">
                    <h3>Дополнительная информация:</h3>
                    <div class="info-row">
                        <span class="label">URI:</span> %s
                    </div>
                    <div class="info-row">
                        <span class="label">Host:</span> %s
                    </div>
                    <div class="info-row">
                        <span class="label">IP адрес:</span> %s
                    </div>
                    <div class="info-row">
                        <span class="label">User Agent:</span> %s
                    </div>
                </div>
                
                <div class="test-form">
                    <h3>Протестировать другие HTTP методы:</h3>

                    <p>Используйте curl или Postman для тестирования других методов:</p>
                    <pre>curl -X POST http://localhost:8000/method</pre>
                    <pre>curl -X PUT http://localhost:8000/method</pre>
                    <pre>curl -X DELETE http://localhost:8000/method</pre>
                </div>
            </div>
        </body>
        </html>',
            $method,
            $additionalInfo['uri'],
            $additionalInfo['host'],
            $additionalInfo['ip'] ?? 'Unknown',
            htmlspecialchars($additionalInfo['user_agent'] ?? 'Unknown')
        );

        return new Response($html);
    }
}
