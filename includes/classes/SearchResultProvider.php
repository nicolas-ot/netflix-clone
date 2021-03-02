<?php
class SearchResultProvider {
    private $con, $username;
    public function __construct($con, $username) {
        $this->con = $con;
        $this->username = $username;
    }

    public function getResults($inputText) {
        $entities = EntityProvider::getSearchEntities($this->con, $inputText);
        $html = "<div class='previewCategories noScroll'>";
        $html .= $this->getResultHtml($entities);

        return $html . "</div>";
    }

    private function getResultHtml($entities) {
        if($entities == null) {
            return;
        }

        $preview = new PreviewProvider($this->con, $this->username);

        $html = "";
        foreach($entities as $entity) {
            $html .= $preview->createEntityPreviewSquare($entity);
        }

        return $html;
    }
}
?>