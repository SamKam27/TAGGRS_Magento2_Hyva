<?php

namespace Hyva\TaggrsDataLayer\Controller\GetSessionDataLayer;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Controller\Result\JsonFactory;
use Psr\Log\LoggerInterface;
use Taggrs\DataLayer\Helper\QuoteDataHelper;
use Magento\Customer\Model\Session;

class Index implements HttpGetActionInterface
{

    private Session $session;

    private JsonFactory $jsonFactory;

    /**
     * @param QuoteDataHelper $quoteDataHelper
     * @param JsonFactory $jsonFactory
     */
    public function __construct(Session $session, JsonFactory $jsonFactory)
    {
        $this->session = $session;
        $this->jsonFactory = $jsonFactory;
    }

    public function execute()
    {
        $result = $this->jsonFactory->create();
        $result->setData($this->session->getDataLayer());
        $this->session->unsDataLayer();

        return  $result;
    }
}
